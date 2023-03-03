<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Seo;
use App\Models\Admin\Site;
use App\Models\Admin\Category;
use App\Models\Admin\Post;
use App\Models\Contact;

use Illuminate\Support\Facades\Validator;


class ContactController extends Controller
{
  // public function contact()
  // {
  //   return view('pages/contact', ['seos' => Seo::first(), 'site_setting' => Site::first(), 'categories' => category::all(), 'blog_posts' => Post::all()]);
  // }

  public function contact()
  {
    return view('pages/contact');
  }

  public function sendmessage(Request $Request)
  {

    $validator = Validator::make($Request->all(), [
      'name' => 'required',
      'email' => 'required|email',
      'phone' => 'required',
      'message' => 'required',


    ]);
    if ($validator->fails()) {
      return \Response()->json(['error' => 'fill the form courrectly']);
    } else {

      Contact::insert([
        'name' => $Request->name,
        'email' => $Request->email,
        'phone' => $Request->phone,
        'message' => $Request->message,
        'status' => 0

      ]);
    }
    return Response()->json(['success' => 'Thank you for sending message']);


  }
}