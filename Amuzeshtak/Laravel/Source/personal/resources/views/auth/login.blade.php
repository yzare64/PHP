@extends('layouts.front')
@section('title','ورود')
@section('content')
    <div class="back-to-home rounded d-none d-sm-block">
        <a href="{{route('login')}}" class="btn btn-icon btn-soft-primary"><i data-feather="home" class="icons"></i></a>
    </div>
<!-- Hero Start -->
<section class="bg-home d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6">
                <div class="mr-lg-5">
                    <img src="{{asset('images/user/login.svg')}}" class="img-fluid d-block mx-auto" alt="">
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="card login-page bg-white shadow rounded border-0">
                    <div class="card-body">
                        <h4 class="card-title text-center">ورود</h4>
                        <form class="login-form mt-4" action="{{route('login')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group position-relative">
                                        <label>ایمیل <span class="text-danger">*</span></label>
                                        <i data-feather="user" class="fea icon-sm icons"></i>
                                        <input type="email" value="{{old('email')}}" class="form-control pl-5 @error('email') is-invalid @enderror" placeholder="ایمیل" name="email" required>
                                        @error('email')
                                        <span class="text-danger small mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group position-relative">
                                        <label>رمز عبور <span class="text-danger">*</span></label>
                                        <i data-feather="key" class="fea icon-sm icons"></i>
                                        <input type="password" value="{{old('password')}}" name="password" class="form-control pl-5 @error('password') is-invalid @enderror " placeholder="رمزعبور" required>
                                        @error('password')
                                        <span class="text-danger small mt-2">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-between">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1" name="remember" value="{{old('remember')? 'checked' : ''}}">
                                                <label class="custom-control-label" for="customCheck1">مرا به خاطر بسپار</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-0">
                                    <button type="submit" class="btn btn-primary btn-block">ورود</button>
                                </div>
                                <div class="col-lg-12 mt-4 text-center">
                                    <h6>ورود با</h6>
                                    <ul class="list-unstyled social-icon mb-0 mt-3">
                                        <a href="" class="btn btn-danger btn-block"> ورود با گوگل G </a>
                                    </ul><!--end icon-->
                                </div>
                                <div class="col-12 text-center">
                                    <p class="mb-0 mt-3"><small class="text-dark mr-2"> حساب کاربری ندارید ?</small> <a href="{{route('register')}}" class="text-dark font-weight-bold">ثبت نام کنید</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!---->
            </div> <!--end col-->
        </div><!--end row-->
    </div> <!--end container-->
</section><!--end section-->
<!-- Hero End -->
@endsection

