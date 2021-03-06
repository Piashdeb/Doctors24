@extends('layouts.master')
@section('title')
    Home
@endsection
@section('content')
    <!--================ Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content row">
                    <div class="col-lg-12">
                        <h1>We Care for Your Health Every Moment</h1>
                        <p>If you are looking at blank cassettes on the web, you may be very confused at the difference in
                            price You may see some for as low as each.</p>
                        <a class="main_btn mr-10" href="#">get started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <!--================ Start Offered Services Area =================-->
    <section>
        <div class="container">
            <div class="row justify-content-center section-title-wrap">
                <div class="col-lg-12">
                    <h1>What You Want</h1>
                </div>
            </div>
            <div class="row mbr-justify-content-center">
                <div class="col-lg-6 mbr-col-md-10">
                    <a href="#">
                        <div class="wrap">
                            <div class="ico-wrap">
                                <span class="mbr-iconfont fa fa-user-md"></span>
                            </div>
                            <div class="text-wrap vcenter">
                                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">SEARCH
                                    <span>DOCTOR</span>
                                </h2>
                                <p class="mbr-fonts-style text1 mbr-text display-6">Find your doctor easily with a minimum of effort. We've kept everything organised for you.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 mbr-col-md-10">
                    <a href="#">
                        <div class="wrap">
                            <div class="ico-wrap">
                                <span class="mbr-iconfont fa fa-hospital-o"></span>
                            </div>
                            <div class="text-wrap vcenter">
                                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">BOOK
                                    <span>APPOINTMENT</span>
                                </h2>
                                <p class="mbr-fonts-style text1 mbr-text display-6">Ask for an appointment of the doctor quickly with almost a single click. We take care of the rest. </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 mbr-col-md-10">
                    <a href="#">
                        <div class="wrap">
                            <div class="ico-wrap">
                                <span class="mbr-iconfont fa fa-building-o"></span>
                            </div>
                            <div class="text-wrap vcenter">
                                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">GET WELL
                                    <span>SOON</span>
                                </h2>
                                <p class="mbr-fonts-style text1 mbr-text display-6">Visit the doctor, take the service based on your appointment. Get back to good health and happiness.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 mbr-col-md-10">
                    <a href="#">
                        <div class="wrap">
                            <div class="ico-wrap">
                                <span class="mbr-iconfont fa fa-h-square"></span>
                            </div>
                            <div class="text-wrap vcenter">
                                <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Covid-19
                                    <span> Vaccine Regrestration</span>
                                </h2>
                                <p class="mbr-fonts-style text1 mbr-text display-6">The COVID-19 Vaccine can help protect you from getting COVID-19. </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </section>
    <!--================ End Offered Services Area =================-->

    <!--================ Procedure Category Area =================-->
    <section class="procedure_category section_gap">
        <div class="container">
            <div class="row justify-content-center section-title-wrap">
                <div class="col-lg-12">
                    <h1>Procedure Category</h1>
                    <p>


                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="{{ asset('public/user_asset/img/procedure/p1.jpg') }}" alt="Procedure">
                        <div class="categories_details">
                            <div class="categories_text">
                                <div class="border_line"></div>
                                <a href="single-blog.html">
                                    <h5>Medicine Specialist</h5>
                                </a>
                                <div class="border_line"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="{{ asset('public/user_asset/img/procedure/p2.jpg') }}" alt="Procedure">
                        <div class="categories_details">
                            <div class="categories_text">
                                <div class="border_line"></div>
                                <a href="single-blog.html">
                                    <h5>Heart Specialist</h5>
                                </a>
                                <div class="border_line"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories_post">
                        <img src="{{ asset('public/user_asset/img/procedure/p3.jpg') }}" alt="Procedure">
                        <div class="categories_details">
                            <div class="categories_text">
                                <div class="border_line"></div>
                                <a href="single-blog.html">
                                    <h5>ICU Consultent</h5>
                                </a>
                                <div class="border_line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Procedure Category Area =================-->

    <!--================ About Myself Area =================-->
    <section class="about_myself pad_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-0">
                    <div class="about_img">
                        <img class="img-fluid w-100" src="{{ asset('public/user_asset/img/about-me.jpg') }}" alt="">
                    </div>
                </div>

                <div class="col-lg-6 pl-0">
                    <div class="about_box">
                        <div class="section-title-wrap text-left">
                            <h1>About Ourself</h1>
                            <p>
                                
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


    <!--================ Start Feedback Area =================-->
    <section class="feedback_area section_gap relative">
        <div class="container">
            <div class="row justify-content-center section-title-wrap">
                <div class="col-lg-12">
                    <h1>Enjoy our Client???s Feedback</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.
                    </p>
                </div>
            </div>

            <div class="feedback_contents justify-content-center align-items-center">
                <div class="active-review-carusel owl-carousel">
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="{{ asset('public/user_asset/img/feedback-bg.jpg') }}" alt="">
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
                                    Accessories Here you can find the best computer accessory for your laptop, monitor,
                                    printer, scanner, speaker. Here you can find the best computer accessory for your
                                    laptop, monitor, printer, scanner, speaker.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <img src="{{ asset('public/user_asset/img/feedback-bg.jpg') }}" alt="">
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
                                    Accessories Here you can find the best computer accessory for your laptop, monitor,
                                    printer, scanner, speaker. Here you can find the best computer accessory for your
                                    laptop, monitor, printer, scanner, speaker.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <img src="{{ asset('public/user_asset/img/feedback-bg.jpg') }}" alt="">
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
                                    Accessories Here you can find the best computer accessory for your laptop, monitor,
                                    printer, scanner, speaker. Here you can find the best computer accessory for your
                                    laptop, monitor, printer, scanner, speaker.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <img src="img/feedback-bg.jpg" alt="">
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
                                    Accessories Here you can find the best computer accessory for your laptop, monitor,
                                    printer, scanner, speaker. Here you can find the best computer accessory for your
                                    laptop, monitor, printer, scanner, speaker.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Feedback Area =================-->

    <!--================ Start Appointment Area =================-->
    {{-- <section class="appointment-area">
    <div class="container">
        <div class="row justify-content-between align-items-center appointment-wrap">
            <div class="col-lg-5 col-md-6 appointment-left">
                <h1>
                    Servicing Hours
                </h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <ul class="time-list">
                    <li class="d-flex justify-content-between">
                        <span>Monday-Friday</span>
                        <span>08.00 am - 10.00 pm</span>
                    </li>
                    <li class="d-flex justify-content-between">
                        <span>Saturday</span>
                        <span>08.00 am - 10.00 pm</span>
                    </li>
                    <li class="d-flex justify-content-between">
                        <span>Sunday</span>
                        <span>08.00 am - 10.00 pm</span>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 col-md-6 pt-60 pb-60">
                <div class="appointment-right">
                    <form class="form-wrap" action="#">
                        <h3 class="pb-20 text-center mb-20">Book an Appointment</h3>
                        <input type="text" class="form-control" name="name" placeholder="Patient Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Patient Name'">
                        <input type="text" class="form-control" name="phone" placeholder="Phone " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'">
                        <input type="email" class="form-control" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
                        <input id="datepicker1" name="dop" class="dates form-control" placeholder="Date of Birth" type="text">
                        <div class="form-select" id="service-select">
                            <select>
                                <option data-display="">Disease Type</option>
                                <option value="1">Type One</option>
                                <option value="2">Type Two</option>
                                <option value="3">Type Three</option>
                                <option value="4">Type Four</option>
                            </select>
                        </div>
                        <input id="datepicker2" class="dates form-control" placeholder="appointment Date" type="text">
                        <textarea name="messege" class="" rows="5" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
                        <div class="text-center confirm_btn_box">
                            <button class="main_btn text-uppercase">Confirm Booking</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> --}}
    <!--================ End Appointment Area =================-->

    <!--================ Start recent-blog Area =================-->
    <section class="recent-blog-area section_gap">
        <div class="container">
            <div class="row justify-content-center section-title-wrap">
                <div class="col-lg-12">
                    <h1>Our Recent Blogs</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="single-recent-blog col-lg-4 col-md-4">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="{{ asset('public/user_asset/img/b1.jpg') }}" alt="">
                    </div>
                    <a href="#">
                        <h4>Portable Fashion for women</h4>
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
                    </p>
                    <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                        <div class="meta">
                            <span class="lnr lnr-calendar-full"></span> 13th Dec
                            <span class="lnr lnr-heart"></span> 15
                            <span class="lnr lnr-bubble"></span> 04
                        </div>
                    </div>
                </div>
                <div class="single-recent-blog col-lg-4 col-md-4">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="{{ asset('public/user_asset/img/b2.jpg') }}" alt="">
                    </div>
                    <a href="#">
                        <h4>Summer ware are coming</h4>
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
                    </p>
                    <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                        <div class="meta">
                            <span class="lnr lnr-calendar-full"></span> 13th Dec
                            <span class="lnr lnr-heart"></span> 15
                            <span class="lnr lnr-bubble"></span> 04
                        </div>
                    </div>
                </div>
                <div class="single-recent-blog col-lg-4 col-md-4">
                    <div class="thumb">
                        <img class="f-img img-fluid mx-auto" src="{{ asset('public/user_asset/img/b3.jpg') }}" alt="">
                    </div>
                    <a href="#">
                        <h4>Summer ware are coming</h4>
                    </a>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.
                    </p>
                    <div class="bottom d-flex justify-content-between align-items-center flex-wrap">
                        <div class="meta">
                            <span class="lnr lnr-calendar-full"></span> 13th Dec
                            <span class="lnr lnr-heart"></span> 15
                            <span class="lnr lnr-bubble"></span> 04
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ end recent-blog Area =================-->
@endsection
