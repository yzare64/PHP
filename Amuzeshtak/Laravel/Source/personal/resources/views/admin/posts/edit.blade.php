@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="card">
            <div class="card-header text-right">
                ویرایش مقاله
            </div>

            <div class="card-body text-right">
                <form action="{{route('posts.update' , $post->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <select name="category_id" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}"
                                @if($category->id == $post->category_id)
                                    selected
                                        @endif
                                >{{$category->name}}</option>

                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="tags[]" class="form-control" multiple>
                            @foreach($tags as $tag)
                                <option value="{{$tag->id}}"
                                @if($post->isTag($tag->id))
                                    selected
                                    @endif
                                >{{$tag->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control @error('title') is-invalid @enderror"   name="title"  value="{{$post->title}}">
                        @error('title')
                        <span class="text-danger small">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea name="description"  id="description" class="form-control @error('description')  is-invalid @enderror" cols="2" rows="5" >{{$post->description}}</textarea>
                        @error('description')
                        <span class="text-danger small">{{$message}}</span>
                        @enderror
                        </textarea>
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" name="image">
                        @error('image')
                        <span class="text-danger small">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <img src="{{asset('storage/'.$post->image)}}" alt="" width="40" height="60">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success " style="float: left" >افزودن</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
