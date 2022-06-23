@extends('layouts.front')
@section('content')
    <!-- Hero Start -->
    <section class="bg-half w-100" style="background: url('images/landing/bg.png') center center;">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="page-next-level">
                        <h4 class="title text-white title-dark"> پروژه وبسایت شخصی - دوره جامع متخصص لاراول </h4>
                        <div class="page-next">
                            <nav aria-label="breadcrumb" class="d-inline-block">
                                <ul class="breadcrumb bg-white rounded shadow mb-0">
                                    <li class="breadcrumb-item"><a href="{{route('index')}}">لرن پارس</a> </li>
                                    <li class="breadcrumb-item"><a href="{{route('index')}}">وبسایت شخصی</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Hero End -->


    <section class="section">
        <div class="container">
            <div class="row">
            @include('layouts.search')
                </div>
            </div><!--end row-->

            <div class="row projects-wrapper">
                @forelse($tag->posts as $post)
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 business">
                        <div class="card blog border-0 work-container work-classic shadow rounded-md overflow-hidden">
                            <img src="{{asset('storage/'.$post->image)}}" class="img-fluid work-image" alt="">
                            <div class="card-body">
                                <div class="content">
                                    <a href="{{route('category',$post->category->id)}}" class="badge badge-success">{{$post->category->name}}</a>
                                    <h5 class="mt-3"><a href="{{route('page',$post->id)}}" class="text-dark title">{{$post->title}}</a></h5>
                                    <p class="text-muted">
                                        {{Str::limit($post->description,35,'...')}}
                                    </p>
                                    <a href="{{route('page',$post->id)}}" class="text-primary h6">ادامه مطلب <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                @empty
                    <div class="alert alert-info text-right">
                        در حال حاظر مقاله ای وجود ندارد
                    </div>
                @endforelse

            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->

@endsection
