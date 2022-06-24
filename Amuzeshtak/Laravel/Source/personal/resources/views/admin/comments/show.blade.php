@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="card">
            <div class="card-header text-right">
                پاسخ به نظر
                {{$comment->user->name}}
            </div>

            <div class="card-body text-right">
                <div class="form-group">
                    <textarea  cols="5" rows="5" class="form-control" disabled>{!! $comment->contents !!}</textarea>
                </div>
                <form action="{{route('comments.reply',$comment->id)}}" method="post">
                    @csrf
                    <div class="form-group">
                        <textarea name="contents" id="description"  cols="5" rows="5" class="form-control @error('contents') is-invalid @enderror" ></textarea>
                        @error('contents')
                        <span class="text-danger small">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success form-control " style="float: left" >پاسخ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
