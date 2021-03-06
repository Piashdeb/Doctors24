@extends('layouts.master')
@section('title')
About
@endsection
@section('content')
<!--================ Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-left">
                <h2>About Us</h2>
                <div class="page_link">
                    <a href="index.html">Home</a>
                    <a href="about.html">About</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->

<!--================ About Myself Area =================-->
<section class="about_myself section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pr-0">
                <div class="about_img">
                    <img class="img-fluid w-100" src="{{asset('public/user_asset/img/about-me.jpg')}}" alt="">
                </div>
            </div>

            <div class="col-lg-6 pl-0">
                <div class="about_box">
                    <div class="section-title-wrap text-left">
                        <h1>About Ourself</h1>
                        <p>
                            nappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the
                            workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.
                        </p>
                    </div>

                    <div class="activity">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="activity_box">
                                    <div>
                                        <i class="lnr lnr-database"></i>
                                    </div>
                                    <h3>$<span class="counter">2.5</span> M</h3>
                                    <p>Total Donation</p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="activity_box">
                                    <div>
                                        <i class="lnr lnr-book"></i>
                                    </div>
                                    <h3 class="counter">1465</h3>
                                    <p>Total Project</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="activity_box">
                                    <div>
                                        <i class="lnr lnr-users"></i>
                                    </div>
                                    <h3 class="counter">3965</h3>
                                    <p>Total Volunteers</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="activity_box">
                                    <div>
                                        <i class="lnr lnr-users"></i>
                                    </div>
                                    <h3 class="counter">3965</h3>
                                    <p>Total Volunteers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End About Myself Area =================-->

<!-- Start Feedback Area -->
<section class="feedback_area section_gap relative">
    <div class="container">
        <div class="row justify-content-center section-title-wrap">
            <div class="col-lg-12">
                <h1>Enjoy our Client’s Feedback</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>

        <div class="feedback_contents justify-content-center align-items-center">
            <div class="active-review-carusel owl-carousel">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{asset('public/user_asset/img/feedback-bg.jpg')}}" alt="">
                    </div>

                    <div class="col-lg-6">
                        <div class="single-feedback-carusel">
                            <div class="d-flex flex-row">
                                <h4 class="">Fannie Rowe</h4>
                                <div class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <p class="">
                                Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can
                                find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{asset('public/user_asset/img/feedback-bg.jpg')}}" alt="">
                    </div>

                    <div class="col-lg-6">
                        <div class="single-feedback-carusel">
                            <div class="d-flex flex-row">
                                <h4 class="">Fannie Rowe</h4>
                                <div class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <p class="">
                                Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can
                                find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{asset('public/user_asset/img/feedback-bg.jpg')}}" alt="">
                    </div>

                    <div class="col-lg-6">
                        <div class="single-feedback-carusel">
                            <div class="d-flex flex-row">
                                <h4 class="">Fannie Rowe</h4>
                                <div class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <p class="">
                                Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can
                                find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{asset('public/user_asset/img/feedback-bg.jpg')}}" alt="">
                    </div>

                    <div class="col-lg-6">
                        <div class="single-feedback-carusel">
                            <div class="d-flex flex-row">
                                <h4 class="">Fannie Rowe</h4>
                                <div class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <p class="">
                                Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can
                                find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Feedback Area -->
@endsection
