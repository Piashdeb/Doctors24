@extends('layouts.master')
@section('title')
    Profile Setting
@endsection
@section('content')
    <!--================ Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-left">
                    <h2>Profile Setting</h2>
                    <div class="page_link">
                        <a href="index.html">Home</a>
                        <a href="#">Profile Setting</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container ">
            <div >
                <h3 class="text-center p-2">Profile Setting</h3>
            </div>

            <div class="d-flex justify-content-around">

                 <div class="col-md-5">
                    <form class="shadow p-3 mb-5 bg-body rounded" method="POST" enctype="multipart/form-data" action="{{action('User\ProfileController@update_profile')}}">
                        @csrf
                        <div class=" mb-3 ">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" id="name" class="form-control" name="name" placeholder="enter name" value="{{auth()->user()->name}}"/>
                          </div>
                        <div class="mb-3 ">
                          <label for="email" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="email" name="email" placeholder="enter email" value="{{auth()->user()->email}}">
                        </div>
                        <div class="mb-3">
                          <label for="contactNo" class="form-label">Number</label>
                          <input type="text" class="form-control" id="contactNo" name="contactNo" placeholder="enter contact no" value="{{auth()->user()->contactNo}}">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="enter address" value="{{auth()->user()->address}}">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>

                            <input onchange="document.getElementById('imagePreview').src = window.URL.createObjectURL(this.files[0])" type="file" class="form-control" id="image" name="image">
                        </div>
                        <div class="mb-3">
                            <img id="imagePreview" height="100" width="300">
                        </div>

                        <button type="submit" class="btn btn-primary rounded-pill w-100">Submit</button>
                    </form>
                </div>

               <div class="col-md-5">
                    <form class="shadow p-3 mb-5 bg-body rounded" >
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Old Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">New Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary rounded-pill w-100">Submit</button>
                    </form>

                </div>
            </div>

    </section>
@endsection
