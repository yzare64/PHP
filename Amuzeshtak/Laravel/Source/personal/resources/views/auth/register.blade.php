@extends('layouts.front')
@section('title','ثبت نام')
@section('content')
{{--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>--}}
<div class="back-to-home rounded d-none d-sm-block">
    <a href="{{route('register')}}" class="btn btn-icon btn-soft-primary"><i data-feather="home" class="icons"></i></a>
</div>

<!-- Hero Start -->
<section class="bg-home d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6">
                <div class="mr-lg-5">
                    <img src="{{asset('images/user/signup.svg')}}" class="img-fluid d-block mx-auto" alt="">
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="card login_page shadow rounded border-0">
                    <div class="card-body">
                        <h4 class="card-title text-center">ثبت نام</h4>
                        <form class="login-form mt-4" action="{{route('register')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <label>نام <span class="text-danger">*</span></label>
                                        <i data-feather="user" class="fea icon-sm icons"></i>
                                        <input type="text" class="form-control pl-5 @error('name') is-invalid @enderror" placeholder="نام را وارد کنید" name="name"  value="{{old('name')}}" required="">
                                        @error('name')
                                        <span class="text-danger small mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group position-relative">
                                        <label>نام خانوادگی <span class="text-danger">*</span></label>
                                        <i data-feather="user-check" class="fea icon-sm icons"></i>
                                        <input type="text" class="form-control pl-5 @error('lname') is-invalid @enderror" placeholder="نام خانوادگی" name="lname" value="{{old('lname')}}" required="">
                                        @error('lname')
                                        <span class="text-danger small mt-2 ">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group position-relative">
                                        <label>ایمیل <span class="text-danger">*</span></label>
                                        <i data-feather="mail" class="fea icon-sm icons"></i>
                                        <input type="email" class="form-control pl-5 @error('email') is-invalid @enderror" placeholder="ایمیل" name="email" value="{{old('email')}}" required="">
                                        @error('email')
                                        <span class="text-danger small mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group position-relative">
                                        <label>رمز عبور <span class="text-danger">*</span></label>
                                        <i data-feather="key" class="fea icon-sm icons"></i>
                                        <input type="password" class="form-control pl-5 @error('password') is-invalid @enderror" placeholder="رمز عبور" value="{{old('password')}}" name="password" required="" >
                                        @error('password')
                                        <span class="text-danger small mt-2">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group position-relative">
                                        <label>تکرار رمز عبور <span class="text-danger">*</span></label>
                                        <i data-feather="key" class="fea icon-sm icons"></i>
                                        <input type="password" class="form-control pl-5 @error('password_confirmation') is-invalid @enderror" placeholder="تکرار رمز عبور" value="{{old('password_confirmation')}}" name="password_confirmation" required="" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary btn-block">ثبت نام</button>
                                </div>
                     {{--           <div class="col-lg-12 mt-4 text-center">
                                    <h6>ورود با</h6>
                                    <ul class="list-unstyled social-icon mb-0 mt-3">
                                        <a href="" class="btn btn-danger btn-block"> ورود با گوگل G </a>
                                    </ul><!--end icon-->
                                </div>--}}
                                <div class="col-12 text-center">
                                    <p class="mb-0 mt-3"><small class="text-dark mr-2"> حسابی دارید ?</small> <a href="{{route('login')}}" class="text-dark font-weight-bold">ورود</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!--end col-->
        </div><!--end row-->
    </div> <!--end container-->
</section><!--end section-->
<!-- Hero End -->
@endsection
