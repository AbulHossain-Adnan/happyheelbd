<?php

namespace App\Http\Controllers\Admin\Brand;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Brand;
use App\Models\Product;


class BrandController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Brand::OrderBy('id', 'DESC')->get();
        return response()->json($data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/brand/index', [
            'brands' => Brand::all(),
            'products' => Product::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Brand();
        $data->brand_name = $request->input('brand_name');
        if ($request->hasfile('brand_photo')) {
            $file = $request->file('brand_photo');
            $file_name = time() . '.' . $file->extension();
            $file->move('images/', $file_name);
            $data->brand_photo = $file_name;
        }
        $data->save();
        return response()->json(['success' => 'sdfs']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = Brand::findOrFail($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function updated(Request $request)
    {
        $data_id = $request->input('id');
        $data = Brand::findOrFail($data_id);
        if ($request->hasFile('brand_photo')) {
            $image = $request->file('brand_photo');
            $imagename = time() . '.' . $image->extension();
            $image->move('images/', $imagename);
            $data->brand_photo = $imagename;

        }
        $data->brand_name = $request->input('brand_name');
        $data->update();
        return response()->json(['success' => 'sfds']);

    }



    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Brand::findOrFail($id);
        $image = $data->brand_photo;
        unlink('images/' . $image);
        $data->delete();
        return response()->json(['success' => 'dsdfs']);



    }
}