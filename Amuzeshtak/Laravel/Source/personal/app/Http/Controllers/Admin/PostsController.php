<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();

        return view('admin.posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        $tags=Tag::all();
        return  view('admin.posts.create')->with(['categories'=>$categories,'tags'=>$tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'category_id'=>['required'],
            'title'=>['required'],
            'description'=>['required'],
            'image'=>['required','image','mimes:png,jpg,jpeg']
        ]);
        $slug=$this->slug($request->title);
       $post= Post::create([
            'category_id'=>$request->category_id,
            'user_id'=>auth()->user()->id,
            'title'=>$request->title,
            'slug'=>$slug,
            'description'=>$request->description,
            'image'=>$request->image->store('posts')
        ]);
        if($request->tags)
        {
            $post->tags()->attach($request->tags);

        }
        session()->flash('success','مقاله شما با موفقیت اضافه شد');
        return  redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
//        dd($post->tags->pluck('id')->toArray());
        $categories=Category::all();
        $tags=Tag::all();
        return  view('admin.posts.edit')->with(['post'=>$post,'categories'=>$categories,'tags'=>$tags]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function slug($title)
    {
        $ex=explode(' ', $title);
        return $im=implode('-',$ex);

    }
}
