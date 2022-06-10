@extends('layouts.app')
@section('title','posts list')
@section('content')
    <div class="card card-default">
        <div class="card-header">Posts List</div>
        <div class="card-body">
            @if(session()->has('success'))
                <div class="alert alert-success">{{session()->get('success')}}</div>
                @endif
            @if($posts->count())
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
                @foreach($posts as $post)
                <tr>

                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->slug}}</td>
                    <td><img src="{{asset('storage/'.$post->image)}}" alt=" width="50" height="50" ></td>
                    <td>{!! $post->description !!}</td>
                    <td><a href="{{route('posts.show',$post->slug)}}">show</a></td>
                    <td>
                        @if($post->trashed())
                        <a href="{{route('posts.restore',$post->id)}}">
                            restore
                        </a>
                        @else
                            <a href="{{route('posts.edit',$post->id)}}">
                                Edit
                            </a>
                        @endif
                    </td>
                    <td>
                            <form action="{{route('posts.destroy',$post->id)}}" method="post">
                                @csrf
                                @method('delete')

                                <button type="submit" class="btn btn-sm btn-dark">
                            @if($post->trashed())
                            Delete


                            @else
                                Move To Trash
                                @endif
                                </button>
                            </form>
                        </td>

                </tr>
                @endforeach
                </tbody>
            </table>
                @else
                <div class="alert alert-success">
                    Post Not Yet
                </div>
            @endif
        </div>

    </div>
{{--    {{$posts->links()}}--}}
@endsection
