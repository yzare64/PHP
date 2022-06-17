@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="card">
            <div class="card-header text-right">
                ویرایش برچسب
            </div>

            <div class="card-body text-right">
                <form action="{{route('tags.update',$tag->id)}}" method="post">
                    @csrf
                    @method('PUT')
                 <div class="form-group">
                        <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name"  value="{{ $tag->name }}">
                        @error('name')
                        <span class="text-danger small">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success " style="float: left" >ویرایش</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
