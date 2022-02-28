@extends('layouts.master_admin')
@section('title')
Appointments
@endsection

@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="module">
        <div class="module-head">
            <h3>
                All Appointments</h3>
        </div>
        <div class="module-body table">
            <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                   width="100%">
                <thead>
                <tr>
                    <th>S/N</th>
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
                        <td>{{$row->appointmentID}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->email}}</td>
                        <td>{{$row->contactNo}}</td>
                        <td>{{$row->address}}</td>
                        <td style="text-align:right;">
                            <a class="btn btn-success btn-xs" href="#"><i class="icon-eye-open"></i></a>
                            <a title="done" onclick="return confirm('Done the task?')" class="btn btn-info btn-xs" href="{{action('Admin\AppointmentController@processed_app',['id' => $row->appointmentID])}}"><i class="icon-copy"></i></a>
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
                    { "orderable": false, "targets": [5]}
                ]
            });
        });
    </script>
@endsection
