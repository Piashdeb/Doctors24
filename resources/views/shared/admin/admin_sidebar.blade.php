
    <div class="sidebar">

       <ul class="widget widget-menu unstyled">
            <li class="active"><a href="#"><i class="menu-icon icon-dashboard"></i>Dashboard
                </a></li></ul>
                <!--/.widget-nav-->
        <ul class="widget widget-menu unstyled">
            <li><a href="{{action('Admin\AppointmentController@index')}}"><i class="menu-icon icon-bell"></i>New Appointments </a></li>
            <li><a href="{{action('Admin\AppointmentController@processed')}}"><i class="menu-icon icon-wrench"></i> Processed </a></li>
        </ul>
        <ul class="widget widget-menu unstyled">
            <li><a href="{{action('Admin\HospitalController@index')}}"><i class="menu-icon icon-home"></i> Hospitals </a></li>
            <li><a href="{{action('Admin\DoctorController@index')}}"><i class="menu-icon icon-user-md"></i> Doctors </a></li>
            <li><a href="{{action('Admin\DepartmentController@index')}}"><i class="menu-icon icon-tag"></i> Departments </a></li> </ul>
                <!--/.widget-nav-->
        <ul class="widget widget-menu unstyled">
            <li><a href="{{action('Admin\BlogController@index')}}"><i class="menu-icon icon-tag"></i>Blog Category </a></li>
            <li><a href="{{action('Admin\BlogController@blog')}}"><i class="menu-icon icon-file"></i> Blogs </a></li>
        </ul>
        <ul class="widget widget-menu unstyled">
            <li><a href="#"><i class="menu-icon icon-group"></i>All Patients </a></li>
                <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li> </ul>

    </div>
