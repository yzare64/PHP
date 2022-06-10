@extends('layouts.app')
@section('title','show posts')
@section('content')
    <div class="card card-default">
        <div class="card-header">Show List</div>
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title </th>
                    <th>Slug </th>
                    <th>Image </th>
                    <th>Description </th>
                    <th>Show </th>
                    <th>Edit </th>
                    <th>Delete </th>
                </tr>
                </thead>
                <tbody>
                <tr>

                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->slug}}</td>
                        <td><img src="{{asset('storage/'.$post->image)}}" alt=" width="50" height="50" ></td>
                        <td>{!! $post->description !!}</td>
                        <td><a href="{{route('posts.show',$post->slug)}}">show</a></td>

                    </tr>

                </tbody>
            </table>
        </div>
    </div>
@endsection
