<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    use ApiResponse;
   public function index(){
       $posts = PostResource::collection(post::get()) ;

       return $this->apiResponse($posts,'ok',200);

   }
    public function store(Request $request)
    {
        $post = post::create($request->all());
        if ($post){
            return "post insert success";
        }

    }
}
