@extends('layouts.app')

@section('content')
    <div class="container">
            @if(session()->has('success'))
                <div class="alert-success text-right">{{session()->get('success')}}</div>
                @endif
                <div class="card">
                    <div class="card-header text-right">
کاربران
                    </div>

                    <div class="card-body">
                        <table class="table table-borderless text-center">
                        <thead>
                        <tr>
                            <th>ردیف</th>
                            <th>نام</th>
                            <th>ایمیل</th>
                            <th>نقش</th>
                            <th>ویرایش</th>
                            <th>حذف</th>

                        </tr>
                        </thead>
                            <tbody>
                            @forelse($users as $user)
                            <tr>
                              <td>{{$user->id}}</td>
                              <td>{{$user->name}}</td>
                              <td>{{$user->email}}</td>
                              <td>{{$user->role}}</td>
                                <td>
                                    <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary btn-sm shadow">ویرایش</a>
                                </td>
                                <td>
                                    <form action="{{route('users.destroy',$user->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm shadow">حذف</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <div class="alert alert-info text-right">
                                کاربری برای نمایش وجود ندارد
                            </div>
                            @endforelse
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>


@endsection
