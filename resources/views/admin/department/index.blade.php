@extends('layouts.master_admin')
@section('title')
    Department
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
                Add Department
            </div>
            <div class="pull-right">
                <a href="{{action('Admin\DepartmentController@create')}}" class="btn btn-primary">Add Department</a>
            </div>
        </div>
    </div>
    <div class="module">
        <div class="module-head">
            <h3>
                All Departments</h3>
        </div>
        <div class="module-body table">
            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                   width="100%">
                <thead>
                <tr>
                    <th>
                        S/N
                    </th>
                    <th>
                        Image
                    </th>
                    <th>
                        Name
                    </th>
                    <th style="text-align:right;">
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($table as $row)
                    <tr class="odd gradeX">
                        <td>
                            {{$row->departmentID}}
                        </td>
                        <td>
                            <img src="{{asset('public/uploads/department/'.$row->imageName)}}" width="40" height="40" alt="">
                            {{--{{$row->created_at->format('F j, Y')}}--}}
                        </td>
                        <td>
                            {{$row->name}}
                        </td>
                        <td style="text-align:right;">
                            <a class="btn btn-success" href="{{action('Admin\DepartmentController@edit_page',['id' => $row->departmentID])}}">edit</a>
                            <a onclick="return confirm('Are you sure to delete?')" class="btn btn-danger" href="{{action('Admin\DepartmentController@del',['id' => $row->departmentID])}}">delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>

@endsection