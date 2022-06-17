@extends('layouts.app')

@section('content')
    <div class="container">
            @if(session()->has('success'))
                <div class="alert-success text-right">{{session()->get('success')}}</div>
                @endif
                <div class="card">
                    <div class="card-header text-right">
مقاله                        <a href="{{route('posts.create')}}" class="btn btn-success btn-sm " style="float: left" >ایجاد مقاله</a>
                    </div>

                    <div class="card-body">
                        <table class="table table-borderless text-center">
                        <thead>
                        <tr>
                            <th>ردیف</th>
                            <th>دسته بندی</th>
                            <th>عنوان</th>
                            <th>تصویر</th>
                            <th>ویرایش</th>
                            <th>حذف</th>

                        </tr>
                        </thead>
                            <tbody>
                            @forelse($posts as $post)
                            <tr>
                              <td>{{$post->id}}</td>
                              <td>{{$post->category}}</td>
                              <td>{{$tag->title}}</td>
                                <td>
                                    <a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary btn-sm shadow">ویرایش</a>
                                </td>
                                <td>
                                    <form action="{{route('posts.destroy',$post->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm shadow">حذف</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <div class="alert alert-info text-right">
                                مقاله ای برای نمایش وجود ندارد
                            </div>
                            @endforelse
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>


@endsection
