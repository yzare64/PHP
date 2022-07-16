@extends('layouts.front')
@section('title','فروشگاه اینترنتی ')
@section('content')
    <article class="container-main">
        <div class="page-row-main-top">
            <div class="col-lg-8 col-md-8 col-xs-12 pull-right">
                <div class="main-slider-container">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="files/images/1s.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="files/images/2s.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="files/images/3s.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="files/images/4s.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                           data-slide="prev">
                            <i class="fa-duotone fa-chevrons-left"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                           data-slide="next">
                            <i class="fa-duotone fa-chevrons-right"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <!--    slider--------------------------------->
            <!--adplacement-------------------------------->
            <div class="col-lg-4 col-md-4 col-xs-12 pull-left">
                <aside class="adplacement-container-column">
                    <a href="#" class="adplacement-item adplacement-item-column">
                        <div class="adplacement-sponsored-box">
                            <img src="files/images/1.gif">
                        </div>
                    </a>
                    <a href="#" class="adplacement-item adplacement-item-column">
                        <div class="adplacement-sponsored-box">
                            <img src="files/images/2.jpg">
                        </div>
                    </a>
                </aside>
            </div>
        </div>
        <!--adplacement-------------------------------->

        <!--    product-slider------------------------->
        <div class="col-lg-9 col-md-9 col-xs-12 pull-right">
            <div class="section-slider-product mb-4 mt-3">
                <div class="widget widget-product card">
                    <header class="card-header">
                        <span class="title-one">محبوب ترین ها</span>
                        <h3 class="card-title">مشاهده همه</h3>
                    </header>
                    <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                 style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <div class="stars-plp">
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                            </div>
                                            <img src="files/images//tev-1.png" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                تلویزیون ال ای دی هوشمند سامسونگ مدل 82NU8900 سایز 82 اینچ
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <ins>
                                                <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <div class="stars-plp">
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                            </div>
                                            <img src="files/images//tev-1.png" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                تلویزیون ال ای دی هوشمند ایکس ویژن مدل 55XT515 سایز 55 اینچ
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <ins>
                                                <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <div class="stars-plp">
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                            </div>
                                            <img src="files/images//tev-1.png" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                تلویزیون ال ای دی هوشمند مجیک تی وی مدل MT65D2400 سایز 65 اینچ
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <ins>
                                                <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <div class="stars-plp">
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                            </div>
                                            <img src="files/images//tev-1.png" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                تلویزیون ال ای دی ال جی مدل 43LJ52100 سایز 43 اینچ
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <ins>
                                                <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <div class="stars-plp">
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                            </div>
                                            <img src="files/images//tev-1.png" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                تلویزیون ال ای دی هوشمند ایکس ویژن مدل 49XTU725 سایز 49 اینچ
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <ins>
                                                <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <div class="stars-plp">
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                            </div>
                                            <img src="files/images//tev-1.png" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                تلویزیون ال ای دی هوشمند ایکس ویژن مدل 43XT725 سایز 43 اینچ
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <ins>
                                                <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <div class="stars-plp">
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                            </div>
                                            <img src="files/images//tev-1.png" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                تلویزیون ال ای دی هوشمند ایکس ویژن مدل 55XTU725 سایز 55 اینچ
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <ins>
                                                <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--    product-slider------------------------->
        <!--slider-sidebar----------------------------->
        <div class="col-lg-3 col-md-3 col-xs-12 pull-left">
            <div class="promo-single mb-4 mt-3">
                <div class="widget-suggestion widget card">
                    <header class="card-header cart-sidebar">
                        <h3 class="card-title ts-3">پیشنهادهای لحظه‌ای</h3>
                    </header>
                    <div id="progressBar">
                        <div class="slide-progress" style="width: 100%; transition: width 5000ms ease 0s;"></div>
                    </div>
                    <div id="suggestion-slider" class="owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                 style="transform: translate3d(1369px, 0px, 0px); transition: all 0.25s ease 0s; width: 2190px;">
                                <div class="owl-item cloned" style="width: 273.75px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="files/images/1sec.jpg" class="w-100" alt="">
                                        </a>
                                        <h3 class="product-title">
                                            <a href="#"> کارت گرافیک ای ام دی مدل Radeon HD 6450 </a>
                                        </h3>
                                        <div class="price">
                                            <span class="amount">2,515,00<span>تومان</span></span>
                                            <div class="stars-plp">
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 273.75px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="files/images/2sec.jpg" class="w-100" alt="">
                                        </a>
                                        <h3 class="product-title">
                                            <a href="#"> هندزفری بلوتوث مدل SP01 </a>
                                        </h3>
                                        <div class="price">
                                            <span class="amount">2,515,00<span>تومان</span></span>
                                            <div class="stars-plp">
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star active"></span>
                                                <span class="mdi mdi-star"></span>
                                                <span class="mdi mdi-star"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                                    aria-label="Previous">‹</span></button><button type="button" role="presentation"
                                                                                   class="owl-next"><span aria-label="Next">›</span></button>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--slider-sidebar----------------------------->

        <!--    adplacemen-container----------------------------->
        <div class="col-12">
            <div class="adplacement-container-row mb-4">
                <div class="col-6 col-lg-3 pull-right" style="padding-left:0;">
                    <a href="#" class="adplacement-item mb-4">
                        <div class="adplacement-sponsored-box">
                            <img src="files/images/3static.jpg" alt="خرید خانه - نوشیدنی" title="خرید خانه - نوشیدنی">
                        </div>
                    </a>
                </div>

                <div class="col-6 col-lg-3 pull-right" style="padding-left:0;">
                    <a href="#" class="adplacement-item mb-4">
                        <div class="adplacement-sponsored-box">
                            <img src="files/images/4static.jpg" alt="خرید خانه - پروتئینی" title="خرید خانه - پروتئینی">
                        </div>
                    </a>
                </div>

                <div class="col-6 col-lg-3 pull-right" style="padding-left:0;">
                    <a href="#" class="adplacement-item mb-4">
                        <div class="adplacement-sponsored-box">
                            <img src="files/images/5static.jpg" alt="داده پرداز" title="داده پرداز">
                        </div>
                    </a>
                </div>

                <div class="col-6 col-lg-3 pull-right" style="padding-left:0;">
                    <a href="#" class="adplacement-item mb-4">
                        <div class="adplacement-sponsored-box">
                            <img src="files/images/6static.jpg" alt="خرید خانه - شوینده و سلولزی"
                                 title="خرید خانه - شوینده و سلولزی">
                        </div>
                    </a>
                </div>

                <div class="col-6 col-lg-6 pull-right" style="padding-left:0;">
                    <a href="#" class="adplacement-item">
                        <div class="adplacement-sponsored-box">
                            <img src="files/images/7static.jpg" alt="باراد" title="باراد">
                        </div>
                    </a>
                </div>

                <div class="col-6 col-lg-6 pull-right" style="padding-left:0;">
                    <a href="#" class="adplacement-item">
                        <div class="adplacement-sponsored-box">
                            <img src="files/images/8static.jpg" alt="پارس حیان" title="پارس حیان">
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!--    adplacemen-container----------------------------->

        <!--    product-slider----------------------------------->
        <div class="col-lg-12 col-md-12 col-xs-12 pull-right">
            <div class="section-slider-product mb-4">
                <div class="widget widget-product card">
                    <header class="card-header">
                        <span class="title-one">محبوب ترین ها</span>
                        <h3 class="card-title">مشاهده همه</h3>
                    </header>
                    <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                 style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="files/images/tev-3.png" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                تلویزیون ال ای دی هوشمند سامسونگ مدل 82NU8900 سایز 82 اینچ
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <ins>
                                                <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                                <div class="stars-plp">
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                </div>
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="files/images/tev-3.png" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                تلویزیون ال ای دی هوشمند ایکس ویژن مدل 55XT515 سایز 55 اینچ
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <ins>
                                                <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                                <div class="stars-plp">
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star"></span>
                                                </div>
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="files/images/tev-3.png" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                تلویزیون ال ای دی هوشمند مجیک تی وی مدل MT65D2400 سایز 65 اینچ
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <ins>
                                                <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                                <div class="stars-plp">
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                </div>
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="files/images/tev-3.png" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                تلویزیون ال ای دی ال جی مدل 43LJ52100 سایز 43 اینچ
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <ins>
                                                <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                                <div class="stars-plp">
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star"></span>
                                                    <span class="mdi mdi-star"></span>
                                                </div>
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="files/images/tev-3.png" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                تلویزیون ال ای دی هوشمند ایکس ویژن مدل 49XTU725 سایز 49 اینچ
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <ins>
                                                <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                                <div class="stars-plp">
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star"></span>
                                                    <span class="mdi mdi-star"></span>
                                                </div>
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="files/images/tev-3.png" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                تلویزیون ال ای دی هوشمند ایکس ویژن مدل 43XT725 سایز 43 اینچ
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <ins>
                                                <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                                <div class="stars-plp">
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star"></span>
                                                </div>
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="files/images/tev-3.png" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                تلویزیون ال ای دی هوشمند ایکس ویژن مدل 55XTU725 سایز 55 اینچ
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <ins>
                                                <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                                <div class="stars-plp">
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star active"></span>
                                                    <span class="mdi mdi-star"></span>
                                                </div>
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--    product-slider------------------------->

        <!--    adplacemen-container----------------------------->
        <div class="col-12">
            <div class="adplacement-container-row mb-4">

                <div class="col-6 col-lg-6 pull-right" style="padding-left:0;">
                    <a href="#" class="adplacement-item">
                        <div class="adplacement-sponsored-box">
                            <img src="files/images/10static.jpg" alt="پوشاک ورزشی مردانه" title="پوشاک ورزشی مردانه">
                        </div>
                    </a>
                </div>

                <div class="col-6 col-lg-6 pull-right" style="padding-left:0;">
                    <a href="#" class="adplacement-item">
                        <div class="adplacement-sponsored-box">
                            <img src="files/images/11static.jpg" alt="نوشت افزار" title="نوشت افزار">
                        </div>
                    </a>
                </div>

            </div>
        </div>
        <!--    adplacemen-container----------------------------->

        <!--    product-slider------------------------->
        <div class="col-lg-12 col-md-12 col-xs-12 pull-right">
            <div class="section-slider-product mb-4">
                <div class="widget widget-product card">
                    <header class="card-header">
                        <span class="title-one">محبوب ترین ها</span>
                        <h3 class="card-title">مشاهده همه</h3>
                    </header>
                    <div class="product-carousel owl-carousel owl-theme owl-rtl owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                 style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 2234px;">
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="files/images/tev-1.png" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                تلویزیون ال ای دی هوشمند سامسونگ مدل 82NU8900 سایز 82 اینچ
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <ins>
                                                <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="files/images/tev-1.png" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                تلویزیون ال ای دی هوشمند ایکس ویژن مدل 55XT515 سایز 55 اینچ
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <ins>
                                                <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="files/images/tev-1.png" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                تلویزیون ال ای دی هوشمند مجیک تی وی مدل MT65D2400 سایز 65 اینچ
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <ins>
                                                <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="files/images/tev-1.png" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                تلویزیون ال ای دی ال جی مدل 43LJ52100 سایز 43 اینچ
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <ins>
                                                <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="files/images/tev-1.png" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                تلویزیون ال ای دی هوشمند ایکس ویژن مدل 49XTU725 سایز 49 اینچ
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <ins>
                                                <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="files/images/tev-1.png" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                تلویزیون ال ای دی هوشمند ایکس ویژن مدل 43XT725 سایز 43 اینچ
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <ins>
                                                <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 309.083px; margin-left: 10px;">
                                    <div class="item">
                                        <a href="#">
                                            <img src="files/images/tev-1.png" class="img-fluid" alt="">
                                        </a>
                                        <h2 class="post-title">
                                            <a href="#">
                                                تلویزیون ال ای دی هوشمند ایکس ویژن مدل 55XTU725 سایز 55 اینچ
                                            </a>
                                        </h2>
                                        <div class="price">
                                            <ins>
                                                <span>۳,۳۹۵,۰۰۰<span>تومان</span></span>
                                            </ins>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--    product-slider------------------------->
    </article>
@endsection

