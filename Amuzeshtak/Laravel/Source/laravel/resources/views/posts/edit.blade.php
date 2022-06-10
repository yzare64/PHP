@extends('layouts.app')
@section('title','edit post')
@section('content')
    <div class="card card-default">
        <div class="card-header">edit post</div>
        @if($errors->any())
            <div class="alert alert-danger" style="direction: rtl">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>

        @endif

        <div class="card-body">
            <form action="{{route('posts.update',$post->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <input type="text" name="title" class="form-control" value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <textarea name="description" placeholder="enter description" cols="6" rows="6" id="description">{{$post->description}}</textarea>
                </div>
                <div class="form-group">
                    <img src="{{asset('storage/'.$post->image)}}" alt="" width="60" height="50">
                </div>
                <div class="form-group">
                    <input type="file" class="form-control" name="image">
                </div>
                <button type="submit" class="btn btn-sm btn-primary form-control" >update</button>
            </form>
        </div>
    </div>
@endsection
