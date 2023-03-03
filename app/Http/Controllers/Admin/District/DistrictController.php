<?php

namespace App\Http\Controllers\Admin\District;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\District;
use App\Models\Admin\Division;


class DistrictController extends Controller
{   

 public function __construct()
    {
        $this->middleware('auth:admin');
    }
  
    public function index()
    {
        return view('admin/district/index',[
            'districts'=>District::all(),
            'divisions'=>Division::all()

        ]);
    }


    public function create()
    {
        $data=District::OrderBy('id','DESC')->get();
        return Response()->json($data);
    }

   
    public function store(Request $request)
    {
        District::create($request->input());
    
        return Response()->json(['success'=>'sdfs']);
    }

  
    public function show($id)
    {

    }

  
    public function edit($id)
    {
         $data=District::find($id);
        return Response()->json($data);
    }

  
    public function updated(request $request){
        $data_id=$request->id;
        $data=District::find($data_id);
        $data->update(['district'=>$request->district_name,'division_id'=>$request->division_id]);
        return back()->with('message','data update successfully');
    }


    public function update(Request $request, $id)
    {
        $data=District::find($id);
        $data->district=$request->district;
        $data->division_id=$request->division_id;
        $data->update();
        return Response()->json(['success'=>'sdfsd']);
    }

  
    public function destroy($id)
    {
        
        District::find($id)->delete();
        return Response()->json(['success'=>'sdfsd']);
    }
   
}
