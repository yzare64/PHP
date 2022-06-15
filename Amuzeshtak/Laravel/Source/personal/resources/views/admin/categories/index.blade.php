@extends('layouts.app')

@section('content')
    <div class="container">

                <div class="card">
                    <div class="card-header text-right">
                        دسته بندی
                        <a href="{{route('categories.create')}}" class="btn btn-success btn-sm " style="float: left" >ایجاد دسته بندی</a>
                    </div>

                    <div class="card-body">
                        <table class="table table-borderless text-center">
                        <thead>
                        <tr>
                            <th>ردیف</th>
                            <th>نام دسته بندی</th>
                            <th>ویرایش</th>
                            <th>حذف</th>

                        </tr>
                        </thead>
                            <tbody>
                            <tr>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                              <td>1</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


@endsection
