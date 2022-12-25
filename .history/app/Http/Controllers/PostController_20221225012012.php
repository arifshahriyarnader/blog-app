<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // public function __construct(){
    //     $this->middleware(['auth']);
    // }
    public function index(){
        return view('posts.index');
    }
    public function store(Request $request){
        $this->validate($request, [
            'body' => 'required'
        ]);

        // auth()->user()->posts()->create();
        Post::create([
            'user_id' => auth()->id(),
            'body' => $request->body
        ]);

        $request->user()->posts
    }
}
