@extends('layouts.general')
@section('title')
    Edit Doctor
@endsection
@section('content')
    <div class="content">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="module">
            <div class="module-head">
                <h3>Edit Doctor</h3>
            </div>
            <div class="module-body">

                <form class="form-horizontal row-fluid" action="{{action('Admin\DoctorController@edit')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$table->doctorID}}">
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Department</label>
                        <div class="controls">
                            <select name="department" id="" class="span8">
                                <option value="">Select a department</option>
                                @foreach($dept as $row)
                                    <option value="{{$row->departmentID}}" @if($table->departmentID == $row->departmentID) selected @endif>{{$row->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Name</label>
                        <div class="controls">
                            <input name="name" type="text" value="{{$table->name}}" id="basicinput" placeholder="Type Hospital Name..." class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Email</label>
                        <div class="controls">
                            <input name="email" value="{{$table->email}}" type="text" id="basicinput" placeholder="Type email..." class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Contact No</label>
                        <div class="controls">
                            <input name="contactNo" value="{{$table->contactNo}}"  type="text" id="basicinput" placeholder="Type Phone No..." class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Chamber</label>
                        <div class="controls">
                            <input name="chamber" type="text" id="basicinput" placeholder="Type chamber name..." value="{{$table->chamber}}" class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Other Details</label>
                        <div class="controls">
                            <textarea name="other_details" id="basicinput" class="span8" placeholder="please write in details">{{$table->chamber}}</textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Image</label>
                        <div class="controls">
                            <input onchange="document.getElementById('dept_img').src = window.URL.createObjectURL(this.files[0])" name="imageName" value="{{$table->imageName}}" type="file" id="imageName" class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <img id="dept_img" src="{{asset('public/uploads/doctor/'.$table->imageName)}}" style="height: 100px; width: 200px;" alt="book image" class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" class="btn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!--/.content-->
    </div>
@endsection