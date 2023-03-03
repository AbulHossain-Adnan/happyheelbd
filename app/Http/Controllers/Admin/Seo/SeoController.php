<?php

namespace App\Http\Controllers\Admin\Seo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Seo;
use Illuminate\Support\Facades\Validator;

class SeoController extends Controller
{ public function __construct()
    {
        $this->middleware('auth:admin');
    }
    

    public function index()
    {
        return view('admin/seo/index',[
                'seos'=>Seo::orderBy('id', 'DESC')->get(),
        ]);
    }


    public function create()
    {
        $data=Seo::all();
        return Response()->json($data);
    }


    public function store(Request $Request)
    {
        $data= new Seo();
        $data->create($Request->input());
        return Response()->json(['success'=>'sdfs']);
  
    }

 
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
       $data=Seo::find($id);
        return Response()->json($data);
    }




    public function update(Request $request,$id)
    {
        $seo_id=Seo::findOrFail($id);
       
        $seo_id->update($request->all());
        return Response()->json(['success'=>'sdfsd']);

    }



    public function destroy($id)
    {
        

        Seo::findOrFail($id)->delete();

        return Response()->json(['success'=>'sdfsdf']);
    }
}
