@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="card">
            <div class="card-header text-right">
                ویرایش کاربران
            </div>

            <div class="card-body text-right">
                <form action="{{route('users.update',$user->id)}}" method="post">
                    @csrf
                    @method('PUT')
                 <div class="form-group">
                     <label for="name">نام</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"  name="name"  value="{{ $user->name }}">
                        @error('name')
                        <span class="text-danger small">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email" >ایمیل</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror"  name="email"  value="{{ $user->email }}">
                        @error('email')
                        <span class="text-danger small">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password" >رمز عبور</label>
                        <input type="text" class="form-control @error('password') is-invalid @enderror"  name="password"  placeholder="رمز عبور را وارد نمایید" ">
                        @error('password')
                        <span class="text-danger small">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="role" >نقش</label>
                        <select name="role" class="form-control" >
                            <option value="admin">admin</option>
                            <option value="user">user</option>
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
