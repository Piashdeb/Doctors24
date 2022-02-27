<header class="header_area">
    <div class="top_menu row m0">
        <div class="container">
            <div class="float-left">
                <ul class="left_side">
                    <li>
                        <a href="#">
                            <i class="fa fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-dribbble"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-behance"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="float-right">
                <ul class="right_side">
                    <li>
                        <a href="#">
                            <i class="lnr lnr-phone-handset"></i> 012-6532-568-9746
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="lnr lnr-envelope"></i> emergency@doctors24.com
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a style='font: 502 21px/80px "Roboto", sans-serif;color: #78249dc2;' class="navbar-brand logo_h" href="index.html">
                    Doctors<span style="font-size: 26px;color: #37a0bf;font-weight: 600;">24</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <div class="row ml-0 w-100">
                        <div class="col-lg-12 pr-0">
                            <ul class="nav navbar-nav center_nav pull-right">
                                <li class="nav-item {{ (Request::is('/') ? 'active' : '')}}">
                                    <a class="nav-link" href="{{action('User\HomeController@index')}}">Home</a>
                                </li>
                                <li class="nav-item {{ (Request::is('about') ? 'active' : '')}}">
                                    <a class="nav-link" href="{{action('User\AboutController@index')}}">About</a>
                                    </li>
                                <li class="nav-item {{ (Request::is('department') ? 'active' : '')}}">
                                    <a class="nav-link" href="{{action('User\DepartmentController@index')}}">Departments</a>
                                </li>
                                <li class="nav-item {{ (Request::is('doctors') ? 'active' : '')}}">
                                    <a class="nav-link" href="{{action('User\DoctorsController@index')}}">Doctors</a>
                                </li>
                                <li class="nav-item {{ (Request::is('blog') ? 'active' : '')}}">
                                    <a class="nav-link" href="{{action('User\BlogController@index')}}">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{action('User\HomeController@hospital')}}">Hospitals</a>
                                </li>
                                <li class="nav-item {{ (Request::is('profile') ? 'active' : '')}}">
                                    <a class="nav-link" href="{{ url('profile') }}">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
