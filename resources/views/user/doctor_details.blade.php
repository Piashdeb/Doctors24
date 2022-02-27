@extends('layouts.master')
@section('title')
    {{$table->name}}
@endsection
@section('content')
    <!--================ Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-left">
                    <h2>{{$table->name}}</h2>
                    <div class="page_link">
                        <a href="">Home</a>
                        <a href="">Doctors</a>
                        <a href="">{{$table->name}}</a>
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
                        <img class="img-fluid w-100" src="{{asset('public/uploads/doctor/'.$table->imageName)}}" alt="">
                    </div>
                </div>

                <div class="col-lg-6 pl-0">
                    <div class="about_box">
                        <div class="section-title-wrap text-left">
                            <h1>{{$table->name}}</h1>
                            <p><i class="fa fa-envelope-o"></i> &nbsp; {{$table->email}}</p><br>
                            <p style="margin-top: -24px;"><i class="fa fa-phone"></i> &nbsp; {{$table->contactNo}}</p>
                            <br>
                            <p style="margin-top: -24px;"><i class="fa fa-location-arrow"></i> &nbsp; {{$table->chamber}}</p>
                        </div>
                        <p>
                            {{$table->other_details}}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End About Myself Area =================-->

    <!--================ Start Appointment Area =================-->
    <section class="appointment-area">
        <div class="container">
            <div class="row justify-content-between align-items-center appointment-wrap">
                <div class="col-lg-5 col-md-6 appointment-left">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if ($message = Session::get('message'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>

                    @endif
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
                        <form class="form-wrap" action="{{action('User\AppointmentController@save')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="doctorID" value="{{$table->doctorID}}">
                            <h3 class="pb-20 text-center mb-20">Book an Appointment</h3>
                            <input type="text" class="form-control" name="name" placeholder="Patient Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Patient Name'">
                            <div class="form-select" id="service-select">
                                <select name="gender" class="">
                                    <option value="">Select a gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            <input id="" name="age" class="dates form-control" placeholder="age ex: 25 years 10 months" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'age ex: 25 years 10 months'">
                            <input id="" name="address" class="dates form-control" placeholder="address" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'address'">
                            <input type="text" class="form-control" name="phone" placeholder="Phone " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" maxlength="11">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
                            <p style="margin-bottom: -7px;">Prefer Appointment Date</p>
                            <input name="prefer_date" class="dates form-control" type="date">
                            <p style="margin-bottom: -7px;">Prefer Appointment Time</p>
                            <input name="prefer_time" class="dates form-control" type="time">
                            <textarea name="message" class="" rows="5" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'"></textarea>
                            <div class="text-center confirm_btn_box">
                                <button type="submit" class="main_btn text-uppercase">Confirm Booking</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Appointment Area =================-->
@endsection
