<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Controllers\Controller;
use App\Models\Admin\Category;


class CategoryController extends Controller
{

    public function index()
    {
        $data = Category::select(['id', 'category_name'])->OrderBy('id', 'DESC')->get();
        return response()->json($data);
    }


    public function create()
    {
        $categories = Category::select(['id', 'category_name'])->get();

        return view('admin.category.index', compact('categories'));
    }

    public function store(CategoryRequest $request)
    {
        $data = Category::create($request->all());
        return response()->json(['success' => 'data added succesfully']);
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return response()->json($category);
    }

    public function update(CategoryRequest $request, $id)
    {
        Category::find($id)->update($request->all());
        return response()->json(['success' => 'success']);
    }
    public function destroy($id)
    {
        Category::find($id)->delete();
        return response()->json(['success' => 'success']);
    }

}