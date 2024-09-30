<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        //metode kas apgriez visus post ierakstus
        $posts = Post::all();
        //dd($posts);
        // \log::debug($posts);
        return view('posts.index', ['allposts'=> $posts]);

    }
    public function show($id){
        
        $post= post::find($id);
        // \Log::debug($post);
        return view('posts.show', ['singlepost'=> $post]);


    }
}
