<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class Categories extends Controller
{
    public function index()
    {
//        $post = new Post();
//        $post->title = 'test3';
//        $post->content = 'test3';
//        $post->save();
        return view('categories.index', ['categories' => Category::all()]);
    }
    public function show($id)
    {
        return view('categories.show', ['categories'=> Category::findOrFail($id)]);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $data = $request->only(['title', 'content']);
        Category::create($data);
        return redirect('/categories');
    }
}
