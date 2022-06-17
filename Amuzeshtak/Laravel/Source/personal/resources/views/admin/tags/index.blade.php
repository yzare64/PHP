@extends('layouts.app')

@section('content')
    <div class="container">
            @if(session()->has('success'))
                <div class="alert-success text-right">{{session()->get('success')}}</div>
                @endif
                <div class="card">
                    <div class="card-header text-right">
برچسب                        <a href="{{route('tags.create')}}" class="btn btn-success btn-sm " style="float: left" >ایجاد برچسب</a>
                    </div>

                    <div class="card-body">
                        <table class="table table-borderless text-center">
                        <thead>
                        <tr>
                            <th>ردیف</th>
                            <th>نام برچسب</th>
                            <th>ویرایش</th>
                            <th>حذف</th>

                        </tr>
                        </thead>
                            <tbody>
                            @forelse($tags as $tag)
                            <tr>
                              <td>{{$tag->id}}</td>
                              <td>{{$tag->name}}</td>
                                <td>
                                    <a href="{{route('tags.edit',$tag->id)}}" class="btn btn-primary btn-sm shadow">ویرایش</a>
                                </td>
                                <td>
                                    <form action="{{route('tags.destroy',$tag->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm shadow">حذف</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <div class="alert alert-info text-right">
                                برچسبی برای نمایش وجود ندارد
                            </div>
                            @endforelse
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>


@endsection
