@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="card">
            <div class="card-header text-right">
                ایجاد دسته بندی
            </div>

            <div class="card-body">
                <form action="#" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="نام دسته بندی خود را وارد کنید" >
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success " style="float: left">افزودن</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
