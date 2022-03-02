<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\BlogCats;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(){
        $table = BlogCats::orderBy('created_at','DESC')->get();
        return view('admin.blogcat.index')->with(['table'=>$table]);
    }
    public function create(){
        return view('admin.blogcat.create');
    }

    public function save(Request $request){
        $request->validate([
            'name' => 'required | unique:departments',
        ]);
        $table = new BlogCats();
        $table->name = $request->name;
        $table->save();
        return redirect()->to('admin/blogcat')->with('message','Category Added Successfully.');
    }

    public function edit_page($id){
        $table = BlogCats::find($id);
        return view('admin.blogcat.edit')->with(['table'=>$table]);
    }
    public function edit(Request $request){
        $request->validate([
            'name' => 'required',
        ]);
        $table = BlogCats::find($request->id);
        $table->name = $request->name;
        $table->save();
        return redirect()->to('admin/blogcat')->with('message','Category edited Successfully.');
    }

    public function del($id){
        $table = BlogCats::find($id);
        $table->delete();
        return redirect()->back()->with('message','Category deleted Successfully.');
    }



// blog

    public function blog(){
        $table = Blog::orderBy('created_at','DESC')->get();
        return view('admin.blog.index')->with(['table'=>$table]);
    }
    public function create_blog(){
        $table = BlogCats::orderBy('created_at','DESC')->get();
        return view('admin.blog.create')->with(['table'=>$table]);
    }

    public function blog_save(Request $request){
        $request->validate([
            'title' => 'required',
            'blogcatID' => 'required',
            'imageName' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $table = new Blog();
        $table->blogcatID = $request->blogcatID;
        $table->title = $request->title;
        $table->description = $request->description;
        $table->userID = auth()->user()->id;
        //image upload
      if ($request->hasFile('imageName')) {
            $extension = $request->imageName->extension();
            $filename =  md5(date('Y-m-d H:i:s'));
            $filename = $filename.'.'.$extension;
            $table->imageName = $filename;
            $request->imageName->move('public/uploads/blog',$filename);
      }
        $table->save();
        return redirect()->to('admin/blog')->with('message','Blog Added Successfully.');
    }

    public function blog_edit_page($id){
        $blogcat = BlogCats::orderBy('created_at','DESC')->get();
        $table = Blog::find($id);
        return view('admin.blog.edit')->with(['table'=>$table,'blogcat' => $blogcat]);
    }

    
    public function blog_edit(Request $request){
        $request->validate([
            'title' => 'required',
            'blogcatID' => 'required',
            'imageName' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $table = Blog::find($request->id);
        $table->blogcatID = $request->blogcatID;
        $table->title = $request->title;
        $table->description = $request->description;
        //image upload
      if ($request->hasFile('imageName')) {
          // previous file delete
        $file = public_path('uploads/blog/'.$table->imageName);
        if(file_exists($file)){
            unlink($file);
        }
        // previous file delete
            $extension = $request->imageName->extension();
            $filename =  md5(date('Y-m-d H:i:s'));
            $filename = $filename.'.'.$extension;
            $table->imageName = $filename;
            $request->imageName->move('public/uploads/blog',$filename);
      }
        $table->save();
        return redirect()->to('admin/blog')->with('message','Blog edited Successfully.');
    }

    public function blog_del($id){
        $table = Blog::find($id);
        // previous file delete
        $file = public_path('uploads/blog/'.$table->imageName);
        if(file_exists($file)){
            unlink($file);
        }
        // previous file delete
        $table->delete();
        return redirect()->back()->with('message','Blog deleted Successfully.');
    }
}
