@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="card">
            <div class="card-header text-right">
                ویرایش نظر
            </div>

            <div class="card-body text-right">
                <form action="{{route('comments.update',$comment->id)}}" method="post">
                    @csrf
                    @method('PUT')
                 <div class="form-group">
                     <input type="text" class="form-control"  value="{{$comment->user->name}}" disabled>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"  value="{{$comment->post->title}}" disabled>
                    </div>
                    <div class="form-group">
                        <textarea name="contents" id="description" cols="30" rows="10" class="form-control @error('contents') is-invalid @enderror">{!! $comment->contents !!}</textarea>
                        @error('contents')
                        <span class="text-danger small">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <select name="status" class="form-control">
                            <option value="1"
                            @if($comment->status==1)
                                selected
                                    @endif
                            >admin</option>
                            <option value="0"
                                    @if($comment->status==0)
                                    selected
                                @endif
                            >user</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success " style="float: left" >ویرایش</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
