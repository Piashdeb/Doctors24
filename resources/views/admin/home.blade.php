@extends('layouts.master_admin')
@section('title')
    Dashboard
@endsection

@section('content')
    <div class="content">
        <div class="btn-controls">
            <div class="btn-box-row row-fluid">
                <a href="#" class="btn-box big span4"><i class=" icon-shopping-cart"></i><b>100</b>
                    <p class="text-muted">
                        Orders</p>
                </a><a href="#" class="btn-box big span4"><i class="icon-group"></i><b>15</b>
                    <p class="text-muted">
                        New Users</p>
                </a><a href="#" class="btn-box big span4"><i class="icon-book"></i><b>15,152</b>
                    <p class="text-muted">
                        Books</p>
                </a>
            </div>

            <div class="btn-box-row row-fluid">
                <div class="span12">
                    <div class="module">
                        <div class="module-head">
                            <h3>Quick Access</h3>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span12">
                            <a href="#" class="btn-box small span4"><i class="icon-envelope"></i><b>Messages</b>
                            </a><a href="#" class="btn-box small span4"><i class="icon-group"></i><b>Clients</b>
                            </a><a href="#" class="btn-box small span4"><i class="icon-exchange"></i><b>Expenses</b>
                            </a>
                        </div>
                    </div>
                    <div class="row-fluid">
                        <div class="span12">
                            <a href="#" class="btn-box small span4"><i class="icon-save"></i><b>Total Sales</b>
                            </a><a href="#" class="btn-box small span4"><i class="icon-bullhorn"></i><b>Social Feed</b>
                            </a><a href="#" class="btn-box small span4"><i class="icon-sort-down"></i><b>Bounce
                                    Rate</b> </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!--/.module-->
    </div>
@endsection
