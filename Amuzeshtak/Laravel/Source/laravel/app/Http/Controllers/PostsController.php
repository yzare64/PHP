<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $posts= Post::simplePaginate(1);
       // $posts= Post::paginate(1);
        $posts= Post::all();
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//       $filenameWithExtension= $request->file('image')->getClientOriginalName();
//        $filename=pathinfo($filenameWithExtension,PATHINFO_FILENAME);
//        $extension=$request->file('image')->getClientOriginalExtension();
//        $filenameStore=$filename.'_'.time().'.'.$extension;
//        $path=$request->file('image')->storeAs('public/image',$filenameStore);
        $this->validate($request,[
            'title'=>['required','unique:posts'],
            'description'=>['required'],
            'image'=>['required','image','min:1kb','max:500kb']
        ]);

        $slug = $this->getSlug($request);
        Post::create([
            'title'=>$request->title,
            'slug'=>$slug,
            'description'=>$request->description,
            'image'=>$request->image->store('posts')

        ]);
        session()->flash('success','create post successfully');
        return  redirect(route('posts.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post=Post::where('slug',$slug)->first();
        return  view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        return view('posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request,[
            'title'=>['required'],
            'description'=>['required'],
               ]);
        $slug = $this->getSlug($request);

        if($request->hasFile('image'))
        {
            Storage::delete($post->image);
            $post->image=$request->image->store('posts');
        }
        $post->title=$request->title;
        $post->description=$request->description;
        $post->slug=$slug;
        $post->update();
        session()->flash('success','post updated successfully');
        return  redirect(route('posts.index'));

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
            Storage::delete($post->image);
            $post->forceDelete();
            session()->flash('success','post deleted successfully');
            return redirect(route('posts.trash'));
        }
        else
        {
            $post->delete();
            session()->flash('success','post move trash successfully');
            return redirect(route('posts.index'));
        }


    }

    public function trash()
    {
        $posts=Post::onlyTrashed()->get();
        return view('posts.index')->with('posts',$posts);
    }

    public function restore($id)
    {
        $post = Post::withTrashed()->find($id);
        $post->restore();
        session()->flash('success','post restored successfully');
        return redirect(route('posts.trash'));
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

    /**
     * @param Request $request
     * @return string
     */
    public function getSlug(Request $request)
    {
        $ex = explode(' ', $request->title);
        $slug = implode('-', $ex);
        return $slug;
    }
}
