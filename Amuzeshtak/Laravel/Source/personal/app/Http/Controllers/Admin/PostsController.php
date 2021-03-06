<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;


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
    public function store(CreatePostRequest $request)
    {
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
    public function update(UpdatePostRequest $request, Post $post)
    {

        $slug=$this->slug($request->title);

        $post->update([
            'category_id'=>$request->category_id,
            'title'=>$request->title,
            'slug'=>$slug,
            'description'=>$request->description,

        ]);
        if($request->hasFile('image'))
        {
            Storage::delete($post->image);
            $post->image=$request->image->store('posts');
            $post->save();
        }
        if($request->tags)
        {
            $post->tags()->sync($request->tags);
        }
        session()->flash('success','مقاله مورد نظر با موفقیت ویرایش شد ');
        return  redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Storage::delete($post->image);
        $post->tags()->detach();
        $post->delete();

        session()->flash('success','مقاله با موفقیت حذف گردید');
        return  redirect(route('posts.index'));
    }

    public function slug($title)
    {
        $ex=explode(' ', $title);
        return $im=implode('-',$ex);

    }

    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            $filenamewithextension= $request->file('upload')->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $filenametostore = $filename.'_'.time().'.'.$extension;


            $request->file('upload')->move(public_path('images'),  $filenametostore);

            $url = asset('images/' .  $filenametostore);
            return response()->json(['fileName' =>  $filenametostore, 'uploaded'=> 1, 'url' => $url]);


        }

    }
}
