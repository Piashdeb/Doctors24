
    <div class="sidebar">

       <ul class="widget widget-menu unstyled">
            <li class="active"><a href="#"><i class="menu-icon icon-dashboard"></i>Dashboard
                </a>
            </li>
        </ul>
                <!--/.widget-nav-->
        @if (auth()->user()->userType == 'Admin')
        <ul class="widget widget-menu unstyled">
            <li><a href="{{action('Admin\AppointmentController@index')}}"><i class="menu-icon icon-bell"></i>New Appointments </a></li>
            <li><a href="{{action('Admin\AppointmentController@processed')}}"><i class="menu-icon icon-wrench"></i> Processed </a></li>
        </ul>
        <ul class="widget widget-menu unstyled">
            <li><a href="{{action('Admin\HospitalController@index')}}"><i class="menu-icon icon-home"></i> Hospitals </a></li>
            <li><a href="{{action('Admin\DoctorController@index')}}"><i class="menu-icon icon-user-md"></i> Doctors </a></li>
            <li><a href="{{action('Admin\DepartmentController@index')}}"><i class="menu-icon icon-tag"></i> Departments </a></li>
        </ul>
                <!--/.widget-nav-->
        <ul class="widget widget-menu unstyled">
            <li><a href="{{action('Admin\BlogController@index')}}"><i class="menu-icon icon-tag"></i>Blog Category </a></li>
            <li><a href="{{action('Admin\BlogController@blog')}}"><i class="menu-icon icon-file"></i> Blogs </a></li>
        </ul>
        @endif
        @if (auth()->user()->userType == 'Doctor')
        <ul class="widget widget-menu unstyled">
            <li><a href="{{action('Doctor\DashboardController@appointments')}}"><i class="menu-icon icon-bell"></i>New Appointments </a></li>
            <li><a href="{{action('Doctor\DashboardController@processed')}}"><i class="menu-icon icon-wrench"></i> Processed </a></li>
            <li><a href="{{action('Doctor\DashboardController@available_status_Update')}}" onclick="event.preventDefault();
                document.getElementById('availability_check').submit();"><i class="menu-icon icon-signout"></i>{{ auth()->user()->doctor->isAvailable == 1 ? 'Available' : 'Unavailable' }} </a>
            </li>
            <form id="availability_check" action="{{ action('Doctor\DashboardController@available_status_Update') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ul>
        @endif
        <ul class="widget widget-menu unstyled">
            <li><a href="{{route('logout')}}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="menu-icon icon-signout"></i>logout</a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ul>

    </div>
