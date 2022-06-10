<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post)
    {
       $posts=$post->all();
       return  view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Post $post)
    {
       $posts=$this->validate($request,[
           'title'=>['required','min:5','unique:posts'],
           'email'=>['required','min:5','email','unique:posts'],
           'description'=>['required','min:5']
       ]);
        $post->create($posts);
        return redirect(route('posts.index'));

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
    public function edit($id)
    {
        //
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
        $post=Post::withTrashed()->find($id);
        if($post->trashed())
        {
            $post->forceDelete();
            return redirect(route('posts.trash'));
        }
        else
        {
            $post->delete();
            return  redirect(route('posts.index'));
        }


    }

    public function trash()
    {
        $posts=Post::onlyTrashed()->get();
       // return view('posts.index')->with('posts',$posts);
        return view('posts.index',compact('posts'));
    }

    public function restore($id)
    {
        $post=Post::withTrashed()->find($id);
        $post->restore();
        return redirect(route('posts.index'));

    }
}
