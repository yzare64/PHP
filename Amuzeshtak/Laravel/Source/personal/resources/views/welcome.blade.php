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
                                    <li class="breadcrumb-item"><a href="index.html">لرن پارس</a> </li>
                                    <li class="breadcrumb-item"><a href="index.html">وبسایت شخصی</a></li>
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
                <div class="col-md-12" dir="ltr">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <button type="submit" class="btn btn-primary btn-sm input-group-text" id="inputGroup-sizing-default">جستجو</button>
                        </div>
                        <input dir="rtl" type="text" class="border-0 border-bottom form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="جستجو کنید">
                    </div>
                </div>
            </div><!--end row-->

            <div class="row projects-wrapper">
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 business">
                    <div class="card blog border-0 work-container work-classic shadow rounded-md overflow-hidden">
                        <img src="{{asset('images/landing/bg.png')}}" class="img-fluid">
                        <div class="card-body">
                            <div class="content">
                                <a href="{{route('page')}}" class="badge badge-primary">برنامه نویسی</a>
                                <h5 class="mt-3"><a href="page.html" class="text-dark title">آینده برنامه نویسی</a></h5>
                                <p class="text-muted">بررسی آینده برنامه نویسی و مزایای آن بر زندگی</p>
                                <a href="page.html" class="text-primary h6">ادامه مطلب <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 marketing">
                    <div class="card blog border-0 work-container work-classic shadow rounded-md overflow-hidden">
                        <img src="{{asset('images/landing/bg1.png')}}" class="img-fluid work-image" alt="">
                        <div class="card-body">
                            <div class="content">
                                <a href="javascript:void(0)" class="badge badge-warning">تکنولوژی</a>
                                <h5 class="mt-3"><a href="page-case-detail.html" class="text-dark title">چرایی اعتیاد به شبکه های اجتماعی</a></h5>
                                <p class="text-muted">بررسی عمیق ابعاد تاثیر مخرب استفاده</p>
                                <a href="javascript:void(0)" class="text-primary h6">ادامه مطلب <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 finance">
                    <div class="card blog border-0 work-container work-classic shadow rounded-md overflow-hidden">
                        <img src="{{asset('images/landing/bg1.png')}}" class="img-fluid work-image" alt="">
                        <div class="card-body">
                            <div class="content">
                                <a href="javascript:void(0)" class="badge badge-success">سرور</a>
                                <h5 class="mt-3"><a href="page-case-detail.html" class="text-dark title">بررسی و تحلیل داده های سرور</a></h5>
                                <p class="text-muted">چرا تحلیل درست سرور نیاز است</p>
                                <a href="javascript:void(0)" class="text-primary h6">ادامه مطلب <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 business">
                    <div class="card blog border-0 work-container work-classic shadow rounded-md overflow-hidden">
                        <img src="images/landing/bg.png" class="img-fluid work-image" alt="">
                        <div class="card-body">
                            <div class="content">
                                <a href="javascript:void(0)" class="badge badge-primary">برنامه نویسی</a>
                                <h5 class="mt-3"><a href="page-case-detail.html" class="text-dark title">آینده برنامه نویسی</a></h5>
                                <p class="text-muted">بررسی آینده برنامه نویسی و مزایای آن بر زندگی</p>
                                <a href="javascript:void(0)" class="text-primary h6">ادامه مطلب <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 marketing">
                    <div class="card blog border-0 work-container work-classic shadow rounded-md overflow-hidden">
                        <img src="{{asset('images/landing/bg1.png')}}" class="img-fluid work-image" alt="">
                        <div class="card-body">
                            <div class="content">
                                <a href="javascript:void(0)" class="badge badge-warning">تکنولوژی</a>
                                <h5 class="mt-3"><a href="page-case-detail.html" class="text-dark title">چرایی اعتیاد به شبکه های اجتماعی</a></h5>
                                <p class="text-muted">بررسی عمیق ابعاد تاثیر مخرب استفاده</p>
                                <a href="javascript:void(0)" class="text-primary h6">ادامه مطلب <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 finance">
                    <div class="card blog border-0 work-container work-classic shadow rounded-md overflow-hidden">
                        <img src="{{asset('images/landing/bg1.png')}}" class="img-fluid work-image" alt="">
                        <div class="card-body">
                            <div class="content">
                                <a href="javascript:void(0)" class="badge badge-success">سرور</a>
                                <h5 class="mt-3"><a href="page-case-detail.html" class="text-dark title">بررسی و تحلیل داده های سرور</a></h5>
                                <p class="text-muted">چرا تحلیل درست سرور نیاز است</p>
                                <a href="javascript:void(0)" class="text-primary h6">ادامه مطلب <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 business">
                    <div class="card blog border-0 work-container work-classic shadow rounded-md overflow-hidden">
                        <img src="{{asset('images/landing/bg.png')}}" class="img-fluid work-image" alt="">
                        <div class="card-body">
                            <div class="content">
                                <a href="javascript:void(0)" class="badge badge-primary">برنامه نویسی</a>
                                <h5 class="mt-3"><a href="page-case-detail.html" class="text-dark title">آینده برنامه نویسی</a></h5>
                                <p class="text-muted">بررسی آینده برنامه نویسی و مزایای آن بر زندگی</p>
                                <a href="javascript:void(0)" class="text-primary h6">ادامه مطلب <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 marketing">
                    <div class="card blog border-0 work-container work-classic shadow rounded-md overflow-hidden">
                        <img src="{{asset('images/landing/bg1.png')}}" class="img-fluid work-image" alt="">
                        <div class="card-body">
                            <div class="content">
                                <a href="javascript:void(0)" class="badge badge-warning">تکنولوژی</a>
                                <h5 class="mt-3"><a href="page-case-detail.html" class="text-dark title">چرایی اعتیاد به شبکه های اجتماعی</a></h5>
                                <p class="text-muted">بررسی عمیق ابعاد تاثیر مخرب استفاده</p>
                                <a href="javascript:void(0)" class="text-primary h6">ادامه مطلب <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2 finance">
                    <div class="card blog border-0 work-container work-classic shadow rounded-md overflow-hidden">
                        <img src="{{asset('images/landing/bg1.png')}}" class="img-fluid work-image" alt="">
                        <div class="card-body">
                            <div class="content">
                                <a href="javascript:void(0)" class="badge badge-success">سرور</a>
                                <h5 class="mt-3"><a href="page-case-detail.html" class="text-dark title">بررسی و تحلیل داده های سرور</a></h5>
                                <p class="text-muted">چرا تحلیل درست سرور نیاز است</p>
                                <a href="javascript:void(0)" class="text-primary h6">ادامه مطلب <i data-feather="arrow-right" class="fea icon-sm"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->

@endsection
