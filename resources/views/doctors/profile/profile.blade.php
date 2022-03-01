@extends('layouts.general')
@section('title')
    Add Doctor
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
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="module">
            <div class="module-head">
                <h3>Update Doctors profile</h3>
            </div>
            <div class="module-body">

                <form class="form-horizontal row-fluid" action="{{ action('Doctor\DashboardController@update_profile') }}"
                    method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Department</label>
                        <div class="controls">
                            <select name="department" id="basicinput" class="span8">
                                <option value="">Select a department</option>
                                @foreach ($dept as $row)
                                    <option value="{{ $row->departmentID }}"
                                        {{ $row->departmentID == auth()->user()->doctor->departmentID ? 'selected' : '' }}>
                                        {{ $row->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Name</label>
                        <div class="controls">
                            <input name="name" type="text" value="{{ auth()->user()->doctor->name }}" id="basicinput"
                                placeholder="Type doctor's Name..." class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Email</label>
                        <div class="controls">
                            <input name="email" value="{{ auth()->user()->doctor->email }}" type="text" id="basicinput"
                                placeholder="Type email..." class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Contact No</label>
                        <div class="controls">
                            <input name="contactNo" value="{{ auth()->user()->doctor->contactNo }}" type="text"
                                id="basicinput" placeholder="Type Phone No..." class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Chamber</label>
                        <div class="controls">
                            <input name="chamber" type="text" id="basicinput" placeholder="Type chamber name..."
                                value="{{ auth()->user()->doctor->chamber }}" class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Other Details</label>
                        <div class="controls">
                            <textarea name="other_details" id="basicinput" class="span8"
                                placeholder="please write in details">{{ auth()->user()->doctor->other_details }}</textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Image</label>
                        <div class="controls">
                            <input
                                onchange="document.getElementById('dept_img').src = window.URL.createObjectURL(this.files[0])"
                                name="imageName" type="file" id="imageName" class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <img id="dept_img" style="height: 100px; width: 200px;" alt="hospital image"
                                class="span8"
                                src="{{ asset('public/uploads/doctor/' . auth()->user()->doctor->imageName) }}">
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" class="btn">Update Profile</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <!--/.content-->
    </div>
@endsection
