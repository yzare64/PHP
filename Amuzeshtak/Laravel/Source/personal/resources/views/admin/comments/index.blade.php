@extends('layouts.app')

@section('content')
    <div class="container">
        @if(session()->has('success'))
            <div class="alert-success text-right">{{session()->get('success')}}</div>
        @endif
        <div class="card">
            <div class="card-header text-right">
                نظرات
            </div>

            <div class="card-body">
                <table class="table table-borderless text-center">
                    <thead>
                    <tr>
                        <th>ردیف</th>
                        <th>نام کاربر</th>
                        <th>نام مقاله</th>
                        <th>وضعیت</th>
                        <th>ویرایش</th>
                        <th>حذف</th>
                        <th>نمایش</th>

                    </tr>
                    </thead>
                    <tbody>
                    @forelse($comments  as $comment)
                        <tr>
                            <td>{{$comment->id}}</td>
                            <td>{{$comment->user->name}}</td>
                            <td>{{$comment->post->title}}</td>
                            <td>
                                @if($comment->status==0)
                                    <span class="text-danger">تایید نشده</span>
                                @else
                                    <span class="text-success">تایید شده</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('comments.edit',$comment->id)}}" class="btn btn-primary btn-sm shadow">ویرایش</a>
                            </td>
                            <td>
                                <form action="{{route('comments.destroy',$comment->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm shadow">حذف</button>
                                </form>
                            </td>
                           <td>
                            <a href="{{route('comments.show',$comment->id)}}" class="btn btn-secondary btn-sm shadow">پاسخ</a>
                            </td>
                        </tr>
                    @empty
                        <div class="alert alert-info text-right">
                            نظری برای نمایش وجود ندارد
                        </div>
                    @endforelse
                    </tbody>

                </table>
            </div>
        </div>
    </div>


@endsection
