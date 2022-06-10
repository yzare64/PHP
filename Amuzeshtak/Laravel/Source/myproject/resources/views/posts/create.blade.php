@extends('layouts.app')
@section('title','posts create')
@section('content')

    @if($errors->any())
        <ul>

            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach

        </ul>

        @endif

    <form action="{{route('posts.store')}}" method="post">
        @csrf
    <input type="text" name="title" value="{{old('title')}}">
    <input type="email" name="email" value="{{old('email')}}">
    <textarea name="description" >{{old('description')}}</textarea>
    <button type="submit" >add</button>
        </form>
@endsection
