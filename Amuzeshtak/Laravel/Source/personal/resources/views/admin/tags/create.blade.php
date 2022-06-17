@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="card">
            <div class="card-header text-right">
                ایجاد برچسب
            </div>

            <div class="card-body text-right">
                <form action="{{route('tags.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control @error('name') is-invalid @enderror"  placeholder="نام برچسب خود را وارد کنید" name="name"  value="{{old('name')}}">
                        @error('name')
                        <span class="text-danger small">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success " style="float: left" >افزودن</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
