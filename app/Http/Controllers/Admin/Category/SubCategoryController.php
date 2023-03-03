<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Sub_category;
use App\Models\Product;
use App\Models\Admin\Brand;


class SubcategoryController extends Controller
{
    
      
    public function index(){
         $data=Sub_category::orderBy('id', 'DESC')->get();
        return response()->json($data);
       
    }
     public function create(){
         return view('admin/subcategory/index',[
            'categories'=>Category::all()

        ]);
       
    }
   

    public function store(Request $request){
        Sub_category::create($request->input());
      return \Response()->json(['success'=>'data added succefully']);  
    }


    public function edit($id){
        $data=Sub_category::findOrFail($id);
        return response()->json($data);
    }


    public function update(Request $request,$id){
        $data= Sub_category::findOrFail($id);
        $data->update([
            'sub_category_name'=>$request->sub_category_name,
            'category_id'=>$request->category_id
        ]);
        return response()->json($data);

    }


    public function destroy($id){
        $data=Sub_category::findOrFail($id);
        $data->delete();
        return response()->json(['success'=>'success']);
        
    }


    public function subcategoryshow($id){
            return view('pages/subcategoryshow',[
                    'products'=>Product::where('status',1)->where('subcategory_id',$id)->get(),
                    'categories'=>Category::all(),
                    'brands'=>Brand::all(),
            ]);
    }
    }

