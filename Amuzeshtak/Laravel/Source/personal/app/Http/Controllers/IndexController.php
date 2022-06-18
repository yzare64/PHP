<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $posts=Post::all();
        return view('welcome')->with(['categories'=>$categories,'posts'=>$posts]);
    }

    public function page(Post $post)
    {
        $categories=Category::all();
        return view('page')->with(['categories'=>$categories,'post'=>$post]);
    }
}
