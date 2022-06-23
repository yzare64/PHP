@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="card">
            <div class="card-header text-right">
                ایجاد مقاله
            </div>

            <div class="card-body text-right">
                <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <select name="category_id" class="form-control">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="tags[]" class="form-control" multiple>
                            @foreach($tags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control @error('title') is-invalid @enderror"  placeholder="عنوان مقاله خود را وارد کنید" name="title"  value="{{old('title')}}">
                        @error('title')
                        <span class="text-danger small">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <textarea name="description" id="description" class="form-control @error('description')  is-invalid @enderror" cols="2" rows="5" placeholder="متن مقاله را وارد نمایید">{{old('description')}}</textarea>
                       @error('description')
                           <span class="text-danger small">{{$message}}</span>
                           @enderror
                        </textarea>
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" name="image">
                        @error('image')
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
