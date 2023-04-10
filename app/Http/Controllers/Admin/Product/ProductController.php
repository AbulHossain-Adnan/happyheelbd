<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Admin\Category;
use App\Models\File;
use App\Models\Admin\Brand;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\Seo;
use App\Models\Admin\Site;
use App\Models\Sub_category;
use App\Models\ProductAttribute;



use App\Http\Requests\Admin\ProductRequest;
use DataTables;
use Image;


class ProductController extends Controller
{


    public function index(Request $request)
    {
        $brands = Brand::select(['id', 'brand_name', 'brand_photo'])->get();
        if ($request->ajax()) {
            $products = Product::with('category','subCategory','attributes')->get();
            return Datatables::of($products)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '';
                    if ($row->status == 0) {
                        $actionBtn .=
                            '   <a href="javascript:void(0)" id="down" data-id="' . $row->id . '" class="edit btn btn-danger btn-sm"><i class="fa fa-thumbs-down"></i></a> ';
                    } else {
                        $actionBtn .=
                            '   <a href="javascript:void(0)" id="down" data-id="' . $row->id . '" class="edit btn btn-primary btn-sm"><i class="fa fa-thumbs-up"></i></a> ';
                    }
                    $actionBtn .= ' 
                  <a href="' . route("products.show", $row->id) . '" class="edit btn btn-primary btn-sm" ></i><i class="fa fa-eye"></i></a>
                     <a href="' . route("products.edit", $row->id) . '" class="edit btn btn-info btn-sm">Edit</a>
                     <a href="javascript:void(0)"  class="edit btn btn-danger btn-sm" onclick="deletedata(' . $row->id . ')" data-id="' . $row->id . '">Delete</a>
                   
                ';
                    return $actionBtn;
                })
                ->addColumn('image_one', function ($data) {

                    $image_name = @$data->attributes[0]['product_image'];
                    $url = "product_images/$image_name";
                    return '<img src="' . $url . '" border="0" 
                    width="60" class="img-rounded" align="center" />';
                })
                ->rawColumns(['action', 'image_one'])
                ->make(true);
        }
        return view('admin.product.index', compact('brands'));

    }
    public function create()
    {
        $categories = Category::select(['id', 'category_name'])->get();
        $brands = Brand::select(['id', 'brand_name', 'brand_photo'])->get();
        return view('admin.product.create', compact('categories', 'brands'));
    }
    public function store(ProductRequest $request)
    {
        try {
            DB::beginTransaction();

        $product = Product::create($request->all());
        $product_colors = $request->product_color;

        for($i=0; $i < count($product_colors); $i++) {
            $datasave=[ 
                'product_id'=>$product->id,
                'product_color'=>$request->product_color[$i],
            ];
            if($request->file('product_image')) {
                $file = $request->product_image[$i];
                $product_image = hexdec(uniqid()) . '.' . $file->extension();
                $image_make =  Image::make($file->getRealPath())->resize(540, 600);
                $image_make->encode('jpg', 50);
                $image_make->save('product_images/' . $product_image);
                $datasave['product_image'] = $product_image;
            }
            DB::table('product_attributes')->insert($datasave);
        }
        $image_one = $request->image_one;
        $image_two = $request->image_two;

        if ($image_one) {
            $image_name1 = hexdec(uniqid()) . '.' . $image_one->extension();
            $image_make = Image::make($image_one);
            $image_make->encode('jpg', 50);
            $image_make->save('product_images/' . $image_name1);
            $product->image_one = $image_name1;
        }
         if ($image_two) {
            $image_name2 = hexdec(uniqid()) . '.' . $image_two->extension();
            $image_make = Image::make($image_two);
             $image_make->encode('jpg', 50);
            $image_make->save('product_images/' . $image_name2);
            $product->image_two = $image_name2;
        }
           
        $product->save();
        
        DB::commit();
         return redirect()->route('products.index')->with('message', 'product created successfully');
        } catch (\Exception $e) {
            DB::rollback();
            // something went wrong
        }

    }
    public function edit($id)
    {
        $product = Product::with('attributes')->findOrFail($id);

        return view('admin/product/edit', [
            'product' => Product::with('attributes')->findOrFail($id),
            'categories' => Category::all(),
            'brands' => Brand::all(),
        ]);
    }
    public function update(Request $request,$id)
    {
        $product = Product::with('attributes')->findOrFail($id);
        if($request->product_image) {

        if($product->attributes ) {
        foreach($product->attributes as $item) {
            unlink('product_images/' . $item->product_image);
            $item->delete();
        }
        }
            $product_images = $request->product_image;
                for($i=0; $i < count($product_images); $i++) {
                        $datasave=[ 
                            'product_id'=>$id,
                            'product_color'=>$request->product_color[$i],
                        ];
                        if($request->file('product_image')) {
                            $file = $request->product_image[$i];
                            $product_image = hexdec(uniqid()) . '.' . $file->extension();
                            Image::make($file->getRealPath())->resize(540, 600)->save('product_images/' . $product_image);
                            $datasave['product_image'] = $product_image;
                        }
                    DB::table('product_attributes')->insert($datasave);
                }

        } 

        $image_one = $request->image_one;
        $image_two = $request->image_two;

        if($image_one) {
            unlink('product_images/' . $product->image_one);
            $product_file = hexdec(uniqid()) . '.' . $image_one->extension();
            Image::make($image_one->getRealPath())->save('product_images/' . $product_file);
            $request['image_one'] = $product_file;
        }
         if($image_two) {
            unlink('product_images/' . $product->image_two);
            $product_file = hexdec(uniqid()) . '.' . $image_two->extension();
            Image::make($image_two->getRealPath())->save('product_images/' . $product_file);
            $request['image_two'] = $product_file;

        }
        $product = $product->update($request->all());

    return redirect()->route('products.index')->with('message', 'product updated successfully');
      
    }
    public function destroy($id)
    {
        $product = Product::find($id);

        $files = ProductAttribute::where('product_id',$id)->get();
        foreach($files as $file) {
             unlink('product_images/' . $file->product_image);
             $file->delete();
        }



        // $image_one = $product_id->image_one;
        // $image_two = $product_id->image_two;
        // $image_three = $product_id->image_three;

        // if ($image_one) {
        //     unlink('product_images/' . $product_id->image_one);
        // }
        // if ($image_two) {
        //     unlink('product_images/' . $product_id->image_two);
        // }
        // if ($image_three) {
        //     unlink('product_images/' . $product_id->image_three);
        // }
        $product->delete();
        return Response()->json(['success' => 'sfds']);

    }
    public function show($id)
    {

        // $product = DB::table('products')
        //     ->join('categories', 'products.category_id', 'categories.id')
        //     ->join('brands', 'products.brand_id', 'brands.id')
        //     ->select('products.*', 'categories.category_name', 'brands.brand_name')
        //     ->where('products.id', $id)->first();


$product = Product::with(['category','subCategory','attributes'])->where('id',$id)->first();


    
        return view('admin/product/show', compact('product'));

    }
    public function getsubcat($id)
    {
        // $cat = Sub_category::find($id)->where('category_id',$id)->get();
        $cat = DB::table('sub_categories')->where('category_id', $id)->get();

        return json_encode($cat);
        // return response()->json($cat);

    }

    public function statusupdate($id)
    {
        $product = Product::where('id', $id)->first();
        if ($product->status == 0) {
            $product->update([
                'status' => 1
            ]);
        } else {
            $product->update([
                'status' => 0
            ]);
        }
        return response()->json(['success' => 'success']);
    }

    public function loadmore(Request $request)
    {

        $products = Product::paginate(2);
        $data = '';
        if ($request->ajax()) {
            foreach ($products as $product) {
                $data .= '<li>' . 'Name:' . ' <strong>' . $product->name . '</strong><br> Email: ' . $product->selling_price . '</li>';
            }
            return $data;
        }

        return view('frontend/index', compact('products'));
    }





}