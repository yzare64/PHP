<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Verta;

class IndexController extends Controller
{
    public function index()
    {

        $categories = Category::all();
        $posts=Post::searched()->get();
        return view('welcome')->with(['categories'=>$categories,'posts'=>$posts]);
    }

    public function page(Post $post)
    {
        $v = new Verta($post->updated_at);
        $categories=Category::all();
        return view('page')->with(['categories'=>$categories,'post'=>$post,'v'=>$v]);
    }

    public function category(Category $category)
    {
        $categories=Category::all();
        return view('category')->with(['categories'=>$categories,'category'=>$category]);
    }

    public function tag(Tag $tag)
    {
        $categories=Category::all();
        return view('tag')->with(['categories'=>$categories,'tag'=>$tag]);
    }
}
