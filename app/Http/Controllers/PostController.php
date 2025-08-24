<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', ['posts' => $posts]);
    }
    
    public function create() {
        return view('posts.create');
    }

    public function store(Request $request) {
  
        $request->validate([
            'title' => '',
            'description' => '',
            'content' => '',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $post = new Post;
        
        $file_name = time() . '.' . request()->image->getClientOriginalExtension();
        
        request()->image->move(public_path('images'), $file_name);
        
        $post->title = $request->title;
        $post->slug = Str::slug($request->title);
        $post->description = $request->description;
        $post->image = $file_name;
        $post->save();
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }
}
