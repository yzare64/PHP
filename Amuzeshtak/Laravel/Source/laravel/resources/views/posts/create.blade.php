@extends('layouts.app')
@section('title','create post')
@section('content')
<div class="card card-default">
    <div class="card-header">create post</div>
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
        <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
          @csrf
            <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="enter title">
            </div>
            <div class="form-group">
                <textarea name="description" placeholder="enter description" id="description"></textarea>
            </div>
            <div class="form-group">
                <input type="file" class="form-control" name="image">
            </div>
            <button type="submit" class="btn btn-sm btn-primary form-control" >add</button>
        </form>
    </div>
</div>
    @endsection
