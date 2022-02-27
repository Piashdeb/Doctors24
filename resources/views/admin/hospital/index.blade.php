@extends('layouts.master_admin')
@section('title')
    Hospital
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
                Add Hospital
            </div>
            <div class="pull-right">
                <a href="{{action('Admin\HospitalController@create')}}" class="btn btn-primary">Add Hospital</a>
            </div>
        </div>
    </div>
    <div class="module">
        <div class="module-head">
            <h3>
                All Hospital</h3>
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
                    <th>Address</th>
                    <th style="text-align:right;">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($table as $row)
                    <tr class="odd gradeX">
                        <td>{{$row->hospitalID}}</td>
                        <td><img src="{{asset('public/uploads/hospital/'.$row->imageName)}}" width="40" style="height: 28px;" alt="">{{--{{$row->created_at->format('F j, Y')}}--}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->contactNo}}</td>
                        <td>{{$row->address}}</td>
                        <td style="text-align:right;">
                            <a class="btn btn-success btn-xs" href="{{action('Admin\HospitalController@edit_page',['id' => $row->hospitalID])}}"><i class="icon-edit"></i></a>
                            <a onclick="return confirm('Are you sure to delete?')" class="btn btn-danger btn-xs" href="{{action('Admin\HospitalController@del',['id' => $row->hospitalID])}}"><i class="icon-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>

@endsection
@section('script')
    <script type="text/javascript">
        $(function () {
            $('#dataTable').DataTable({
                "order": [[ 0, "ASC" ]],
                "iDisplayLength": 25,
                "columnDefs": [
                    { "orderable": false, "targets": [2]}
                ]
            });
        });
    </script>
@endsection