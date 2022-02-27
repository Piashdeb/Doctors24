@extends('layouts.master_admin')
@section('title')
    Doctors
@endsection

@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="module">
        <div class="module-option clearfix">
            <div class="pull-left">
                Add Doctor
            </div>
            <div class="pull-right">
                <a href="{{action('Admin\DoctorController@create')}}" class="btn btn-primary">Add Doctors</a>
            </div>
        </div>
    </div>
    <div class="module">
        <div class="module-head">
            <h3>
                All Doctors</h3>
        </div>
        <div class="module-body table">
            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                   width="100%">
                <thead>
                <tr>
                    <th>S/N</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Chamber</th>
                    <th style="text-align:right;">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($table as $row)
                    <tr class="odd gradeX">
                        <td>{{$row->doctorID}}</td>
                        <td><img src="{{asset('public/uploads/doctor/'.$row->imageName)}}" width="40" style="height: 28px;" alt="">{{--{{$row->created_at->format('F j, Y')}}--}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->contactNo}}</td>
                        <td>{{$row->chamber}}</td>
                        <td style="text-align:right;">
                            <a class="btn btn-success btn-xs" href="{{action('Admin\DoctorController@edit_page',['id' => $row->doctorID])}}"><i class="icon-edit"></i></a>
                            <a onclick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-xs" href="{{action('Admin\DoctorController@del',['id' => $row->doctorID])}}"><i class="icon-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>

@endsection
@section('script')

@endsection