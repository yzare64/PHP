@extends('layouts.front')

@section('content')
    <section class="bg-half">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10">
                    <div class="section-title">
                        <div class="text-center">
                            <h4 class="title mb-4">{{$post->title}}</h4>
                            <img src="{{asset('storage/'.$post->image)}}" class="img-fluid rounded-md shadow-md" alt="">
                            <div class="d-flex mt-3 align-items-center justify-content-between">
                                <p> نویسنده این مطلب : {{$post->user->name}} </p>
                                <p> آخرین بروزرسانی : {{$v}} </p>
                            </div>
                        </div>
                        <p class="text-muted">
                            {!! strip_tags($post->description) !!}
                        </p>

                        <div>
                         @foreach($post->tags as $tag)
                                <a href="{{route('tag',$tag->id)}}" class="btn btn-primary btn-sm">{{$tag->name}}</a>
                            @endforeach
                        </div>

                        <h4 class="my-4">نظرات کاربران</h4>
                        <div class="p-4 bg-light">
                            <h6 class="text-dark">علی</h6>
                            <p class="text-muted h6 font-italic"> بیا این کفشا رو بپوش…پسرک کفشا رو پوشید و خوشحال رو به پیر مرد کرد و گفت: شما خدایید؟! پیر مرد لبش را گزید و گفت نه! پسرک گفت پس دوست خدایی، چون من دیشب فقط به خدا گفتم كه کفش ندارم…</p>
                        </div>
                        @auth
                        <div class="col-10 mt-3 ">
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{session()->get('success')}}
                                </div>
                                @endif
                        <form action="{{route('comment',$post->id)}}" method="post">
                            @csrf


                                    <div class="form-group">
                                <textarea name="contents"  cols="30" rows="5" class="form-control @error('content')  is-invalid @enderror" >
                                </textarea>
                                        @error('content')
                                        <span class="text-danger small">{{$message}}</span>
                                        @enderror
                            @else
                                <div class="alert alert-info">
                                    برای ارسال نظر ابتدا وارد شوید
                                </div>
                                    </div>
                            @endauth

                            <div class="form-group">
                                <button class="btn btn-success btn-sm" type="submit" >ثبت نظر</button>
                            </div>
                        </form>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
@endsection
