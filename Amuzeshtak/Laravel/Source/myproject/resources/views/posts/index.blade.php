@extends('layouts.app')
@section('title','posts list')
@section('content')
    <ul>
        @foreach($posts as $post)
            <li>{{$post}}</li>
        <form action="{{route('posts.destroy',$post->id)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit">
                @if($post->trashed())
                    Delete
                @else
                    Move To Trash
                @endif
            </button>
        </form>
        @endforeach
    </ul>
@endsection
