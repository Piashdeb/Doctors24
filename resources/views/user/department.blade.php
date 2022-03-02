@extends('layouts.master')
@section('title')
    Departments
@endsection
@section('content')
    <!--================ Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-left">
                    <h2>Departments</h2>
                    <div class="page_link">
                        <a href="{{ action('User\HomeController@index') }}">Home</a>
                        <a href="#">Departments</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->

    <!--================ Procedure Category Area =================-->
    <section class="procedure_category section_gap_custom">
        <div class="container">
            <div class="row justify-content-center section-title-wrap">
                <div class="col-lg-12">
                    <h1>Departments</h1>
                    <p>
                        When a person has a medical concern, they may turn to a doctor for help. There are many types of
                        doctor, and a person’s specific concern will usually determine the type of doctor they choose.
                    </p>
                </div>
            </div>

            <div class="row">
                @foreach ($table as $row)
                    <div class="col-lg-4 mb-30">
                        <div class="categories_post">
                            <img src="{{ asset('public/uploads/department/' . $row->imageName) }}" alt="Procedure">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <div class="border_line"></div>
                                    <a href="#">
                                        <h5>{{ $row->name }}</h5>
                                    </a>
                                    <div class="border_line"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--================ End Procedure Category Area =================-->
@endsection
