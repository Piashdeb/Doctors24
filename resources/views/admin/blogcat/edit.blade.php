@extends('layouts.general')
@section('title')
    Edit Department
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
                <h3>Edit Department</h3>
            </div>
            <div class="module-body">

                <form class="form-horizontal row-fluid" action="{{action('Admin\BlogController@edit')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$table->blogcatID}}">
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Category</label>
                        <div class="controls">
                            <input name="name" type="text" id="basicinput" value="{{$table->name}}" placeholder="Type Department Name..." class="span8">
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
