<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Post_category;
use App\Models\Admin\Post;
use App\Models\Admin\Category;
use Image;
use DB;



class PostController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function postcategory(){
    	return view('admin/post-category/index',[

    		'post_categories'=>Post_category::all(),
    		]);
    }





    public function postcategorystore(Request $Request){
    	Post_category::create($Request->all());
    	return back()->with('message','data added successfully');
    }






    public function postcategoryedit($id){

    	$data=Post_category::find($id);
    	return response()->json($data);

    }
    public function postcategoryupdate(Request $Request){

    	$id=$Request->id;

    	Post_category::findOrFail($id)->update([
    		'category_name_eng'=>$Request->category_name_eng,
    		'category_name_bng'=>$Request->category_name_bng,

    ]);
    	return back()->with('message',"data updated successfully");
    }


    public function postcategorydelete($id){
    	Post_category::findOrFail($id)->delete();
    	return back()->with('message','category deleted successfully');
    }
    public function addpost(){
    	return view('admin/post/post',[
    		'posts'=>Post::all(),
    		'categories'=>Category::all()
    	]);
    }
    public function poststore(Request $Request){

    	$data=array();

    	$data['category_id']=$Request->category_id;
    	$data['post_title_eng']=$Request->post_title_eng;
    	$data['post_title_bng']=$Request->post_title_bng;
    	$data['post_details_eng']=$Request->post_details_eng;
    	$data['post_details_bng']=$Request->post_details_bng;
    	

if ($Request->hasFile('post_image')) {
    $uploaded_image=$Request->file('post_image');
    $new_name=time().".". $uploaded_image->extension();
    image::make($uploaded_image)->save(public_path('post_images/'.$new_name));
    $data['post_image']=$new_name;
 
}
DB::table('posts')->insert($data);
return back()->with('message',' data adde successfully');


    }
    public function postedit($id){
    	$data=Post::find($id);
    	return response()->json($data);
    }
    public function postupdated(Request $Request){

    	$id=$Request->id;
    	$data=Post::find($id);

    	$data->post_title_bng=$Request->post_title_bng;
    	$data->post_title_eng=$Request->post_title_eng;
    	$data->post_details_bng=$Request->post_details_bng;
    	$data->post_details_eng=$Request->post_details_eng;


    	if ($Request->hasFile('post_image')) {
    $uploaded_image=$Request->file('post_image');
    $new_name=time().".". $uploaded_image->extension();
    image::make($uploaded_image)->save(public_path('post_images/'.$new_name));
    $data->post_image=$new_name;
 
}

if($Request->category_id){
	$data->category_id=$Request->category_id;
}

$data->save();
return back()->with('message','data updated successfully');


    
    }
    public function postdelete($id){
    	$post_id=Post::find($id);

    	unlink('post_images/'.$post_id->post_image);

    	Post::find($id)->delete();

    	return back()->with('message','post deleted successfully');
    }

    public function blogpost(){
        return view('pages/blog.blade.php');
    }
}
