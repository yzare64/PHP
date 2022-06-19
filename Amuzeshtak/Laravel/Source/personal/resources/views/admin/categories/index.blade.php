@extends('layouts.app')

@section('content')
    <div class="container">
            @if(session()->has('success'))
                <div class="alert-success text-right">{{session()->get('success')}}</div>
                @endif
                <div class="card">
                    <div class="card-header text-right">
                        دسته بندی
                        <a href="{{route('categories.create')}}" class="btn btn-success btn-sm " style="float: left" >ایجاد دسته بندی</a>
                        <a href="{{route('categories.trash')}}" class="btn btn-success btn-sm " style="float: left" >حذف شده ها</a>
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
                            @forelse($categories as $category)
                            <tr>
                              <td>{{$category->id}}</td>
                              <td>{{$category->name}}</td>
                                @if($category->trashed())
                                <td>
                                    <a href="{{route('categories.restore',$category->id)}}" class="btn btn-primary btn-sm shadow">بازگردانی</a>
                                </td>

                                @else
                                    <td>
                                        <a href="{{route('categories.edit',$category->id)}}" class="btn btn-primary btn-sm shadow">ویرایش</a>
                                    </td>
                                @endif
                                <td>
                                    <form action="{{route('categories.destroy',$category->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm shadow">حذف</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                                <div class="alert alert-info text-right">
                                    در حال حاضر دسته بندی وجود ندارد
                                </div>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


@endsection
