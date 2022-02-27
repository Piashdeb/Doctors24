<?php

namespace App\Http\Controllers\Admin;

use App\Departments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    public function index(){
        $table = Departments::orderBy('created_at','DESC')->get();
        return view('admin.department.index')->with(['table'=>$table]);
    }
    public function create(){
        return view('admin.department.create');
    }

    public function save(Request $request){
        $request->validate([
            'name' => 'required | unique:departments',
            'imageName' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $table = new Departments();
        $table->name = $request->name;
        //image upload
      if ($request->hasFile('imageName')) {
        $extension = $request->imageName->extension();
        $filename =  md5(date('Y-m-d H:i:s'));
        $filename = $filename.'.'.$extension;
        $table->imageName = $filename;
        $request->imageName->move('public/uploads/department',$filename);
      }
        $table->save();
        return redirect()->to('admin/departments')->with('message','Department Added Successfully.');
    }

    public function edit_page($id){
        $table = Departments::find($id);
        return view('admin.department.edit')->with(['table'=>$table]);
    }
    public function edit(Request $request){
        $request->validate([
            'name' => 'required',
            'imageName' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $table = Departments::find($request->id);
        $table->name = $request->name;
        if ($request->hasFile('imageName')) {

            // previous file delete
            $file = public_path('uploads/department/'.$table->imageName);
            if(file_exists($file)){
                unlink($file);
            }
            // previous file delete

            $extension = $request->imageName->extension();
            $filename =  md5(date('Y-m-d H:i:s'));
            $filename = $filename.'.'.$extension;
            $table->imageName = $filename;
            $request->imageName->move('public/uploads/department',$filename);
        }
        $table->save();
        return redirect()->to('admin/departments')->with('message','Department edited Successfully.');
    }

    public function del($id){
        $table = Departments::find($id);
        // previous file delete
        $file = public_path('uploads/department/'.$table->imageName);
        if(file_exists($file)){
            unlink($file);
        }
        // previous file delete
        $table->delete();
        return redirect()->back()->with('message','Department deleted Successfully.');
    }
}
