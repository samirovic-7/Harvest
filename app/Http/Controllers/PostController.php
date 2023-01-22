<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index()
{

    $posts = post::all();
    return view('Posts',compact( 'posts'));


}
    public function store(Request $request)
    {
       $post = post::create($request->all());
       if ($post){
           return "post insert success";
       }

    }
}
