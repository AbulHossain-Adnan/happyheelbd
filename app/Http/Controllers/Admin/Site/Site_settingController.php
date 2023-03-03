<?php

namespace App\Http\Controllers\Admin\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Site;
use DataTables;



class Site_settingController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }
  
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = Site::orderBy('id','desc')->get();

            return Datatables::of($data)

                    ->addIndexColumn()

                    ->addColumn('action', function($row){

                     $btn = '
                     <a href="javascript:void(0)" class="edit btn btn-primary btn-sm" onclick="editdata('.$row->id.')">Edit</a>
                     <a href="javascript:void(0)" class="edit btn btn-info btn-sm">View</a>
                     <a href="javascript:void(0)" class="edit btn btn-danger btn-sm" onclick="deletedata('.$row->id.')">Delete</a>
                     ';

                    return $btn;
                    
                    })
                    ->rawColumns(['action'])
                    ->make(true);

        }

        return view('admin/site/index');
    }

    public function create()
    {
        $data=Site::all();
        return Response()->json($data);
    }

   
    public function store(Request $request)
    {

        $data=array();
        $data['phone']=$request->input('phone');
        $data['email']=$request->input('email');
        $data['address']=$request->input('address');
        $data['company_name']=$request->input('company_name');
        $data['facebook']=$request->input('facebook');
        $data['google']=$request->input('google');
        $data['tweeter']=$request->input('tweeter');
        $data['youtube']=$request->input('youtube');
        $data=Site::insert($data);
        return Response()->json(['success'=>'data added']);

    }


    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
       $data=Site::findOrFail($id);
       return Response()->json($data);
    }

   
    public function update(Request $request, $id)
    {
         $data=array();
        $data['phone']=$request->phone;
        $data['email']=$request->email;
        $data['address']=$request->address;
        $data['company_name']=$request->company_name;
        $data['facebook']=$request->facebook;
        $data['google']=$request->google;
        $data['tweeter']=$request->tweeter;
        $data['youtube']=$request->youtube;
        $data=Site::find($id)->update($data);
        return redirect()->route('site.index')->with('message','data updated succefully');
    }

   
    public function destroy($id)
    {
        Site::find($id)->delete();
        return Response()->json(['success'=>'sfds']);
    }
       public function updated(Request $request)
    {
        $id=$request->input('id');
         $data=array();
        $data['phone']=$request->input('phone');
        $data['email']=$request->input('email');
        $data['address']=$request->input('address');
        $data['company_name']=$request->input('company_name');
        $data['facebook']=$request->input('facebook');
        $data['google']=$request->input('google');
        $data['tweeter']=$request->input('tweeter');
        $data['youtube']=$request->input('youtube');
        $data=Site::find($id)->update($data);
        return Response()->json(['success'=>'updated']);
    }
}
