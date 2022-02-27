@extends('layouts.master')
@section('title')
    Profile
@endsection
@section('content')
    <!--================ Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-left">
                    <h2>About Us</h2>
                    <div class="page_link">
                        <a href="{{ url('/') }}">Home</a>
                        <a href="#">Profile Setting</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="account-settings">
                                <div class="user-profile">
                                    <div class="user-avatar">
                                        @php
                                            $path = auth()->user()->imageName == null ? 'https://bootdey.com/img/Content/avatar/avatar7.png' : asset('public/uploads/profile/'.auth()->user()->imageName)
                                        @endphp
                                        <img style="
                                        height: 130px;
                                        width: 130px;
                                    " class="rounded-circle" src="{{$path}}"
                                            alt="Maxwell Admin">
                                    </div>
                                    <div class="user_info text-center mt-3">
                                        <h5 class="user-name">{{auth()->user()->name}}</h5>
                                        <h6 class="user-email">{{auth()->user()->email}}</h6>
                                        <h6 class="user-email">{{auth()->user()->contactNo ?? 'User_contact no'}}</h6>
                                        <h6 class="user-email">{{auth()->user()->address ?? 'User_address'}}</h6>
                                        <span class="badge badge-success">{{auth()->user()->userType}}</span>
                                    </div>
                                    <div class="action_button mt-2">
                                        <a href="{{ url('profile-setting') }}" class="btn btn-primary btn-sm">Profile Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-8 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h3>Your Appointments</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">S/N</th>
                                        <th scope="col">Doctor</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($appointments as $item)
                                    <tr>
                                        <th scope="row">{{$i++}}</th>
                                        <td>{{ $item->doctor->name }}</td>
                                        <td>{{ $item->appointmentTime }}</td>
                                        <td><span class="badge badge-{{ $item->status == 'Pending' ? 'warning' : 'success' }}">{{ $item->status }}</span></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection
