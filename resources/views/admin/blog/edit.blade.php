@extends('layouts.general')
@section('title')
    Edit Blog
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
                <h3>Add a New Blog</h3>
            </div>
            <div class="module-body">

                <form class="form-horizontal row-fluid" action="{{action('Admin\BlogController@blog_edit')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input type="hidden" name="id" value="{{$table->blogID}}">
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Category</label>
                        <div class="controls">
                            <select name="blogcatID" id="basicinput" class="span8">
                                <option value="">Select a category</option>
                                @foreach($blogcat as $row)
                                <option value="{{$row->blogcatID}}" @if($table->blogcatID == $row->blogcatID) selected @endif>{{$row->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Title</label>
                        <div class="controls">
                            <input name="title" type="text" id="basicinput" value="{{$table->title}}" class="span8">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="basicinput">Content</label>
                        <div class="controls">
                            <textarea name="description" id="basicinput" class="span8">{{$table->description}}</textarea>
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
                            <img id="dept_img" src="{{asset('public/uploads/blog/'.$table->imageName)}}" style="height: 100px; width: 200px;" alt="book image" class="span8">
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
