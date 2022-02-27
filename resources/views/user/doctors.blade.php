@extends('layouts.master')
@section('title')
    Doctors
@endsection
@section('content')
    <!--================ Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-left">
                    <h2>Consultants</h2>
                    <div class="page_link">
                        <a href="">Home</a>
                        <a href="#">Consultants</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Banner Area =================-->

    <!-- Start team Area -->
    <section class="team-area section_gap">
        <div class="container">
            <div class="row justify-content-center section-title-wrap">
                <div class="col-lg-12">
                    <h1>Our Medical Team</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="list-group">
                        <ul style="list-style: none" id="departmentFilter">
                            @foreach($dept as $row)
                                <li class="list-group-item list-group-item-action">
                                    <a class="text-black" href="{{action('User\DoctorsController@dept_wise',['id' => $row->departmentID])}}">{{$row->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <form action="" method="">
                                <input id="searchItem" class="form-control" type="text"
                                       data-url="{{action('User\DoctorsController@itemSearch')}}" name="search"
                                       placeholder="Search Here">
                            </form>
                        </div>
                    </div>
                    <div class="row" id="doctorsLoad">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End team Area -->
@endsection
@section('script')

    <script type="text/javascript">
        $(function () {
            contents("{{action('User\DoctorsController@all_doctors')}}");
            $('#departmentFilter li a').click(function (e) {
                e.preventDefault();
                var url = $(this).attr('href');
                //console.log(url);
                contents(url);

            });
            $('#searchItem').keyup(function (e) {
                e.preventDefault();
                var search = $(this).val();
                var url = $(this).data('url')+'?search='+search;

                if (search.length>0){
                    contents(url);
                }
                else {
                    contents("{{action('User\DoctorsController@all_doctors')}}");
                }

            });

        });

        function contents(url) {
            $.get(url, function (result) {
                var showData = '';
                $.each(result, function (i, row) {
                    showData += '<div class="col-lg-4 col-md-6 single-team mb-50">\n' +
                        '                            <div class="thumb">\n' +
                        '                                <img class="img-fluid" style="height: 269px;" src="public/uploads/doctor/' + row.imageName + '" alt="">\n' +
                        '                                <div class="align-items-end justify-content-center d-flex">\n' +
                        '                                    <div class="social-links">\n' +
                        '                                        <a href="#">\n' +
                        '                                            <i class="fa fa-facebook"></i>\n' +
                        '                                        </a>\n' +
                        '                                        <a href="#">\n' +
                        '                                            <i class="fa fa-twitter"></i>\n' +
                        '                                        </a>\n' +
                        '                                        <a href="#">\n' +
                        '                                            <i class="fa fa-dribbble"></i>\n' +
                        '                                        </a>\n' +
                        '                                        <a href="#">\n' +
                        '                                            <i class="fa fa-behance"></i>\n' +
                        '                                        </a>\n' +
                        '                                    </div>\n' +
                        '                                    <p>\n' +
                        '                                        ' + row.department + '\n' +
                        '                                    </p>\n' +
                        '                                    <h4>' + row.name + '</h4>\n' +
                        '                                    <a value="'+row.doctorID+'" href="{{url('doctor/details')}}/'+row.doctorID+'" style="display: block;position: absolute;bottom: 11px;color: #fff !important;border: 1px solid #fff9f9;padding: 5px;">Details</a>\n' +
                        '                                </div>\n' +
                        '                            </div>\n' +
                        '                        </div>'
                });

                $('#doctorsLoad').html(showData);

            });
        }

    </script>

@endsection

