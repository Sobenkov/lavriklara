<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Posts extends Controller
{

    public function index()
    {
//        $post = new Post();
//        $post->title = 'test3';
//        $post->content = 'test3';
//        $post->save();
        return view('posts.index', ['posts' => Post::all()]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $data = $request->only(['title', 'content']);
        Post::create($data);
        return redirect('/posts');
    }
}
