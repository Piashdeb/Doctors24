<?php

namespace App\Http\Controllers\Admin;

use App\Hospitals;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HospitalController extends Controller
{
    public function index(){
        $table = Hospitals::orderBy('created_at','DESC')->get();
        return view('admin.hospital.index')->with(['table'=>$table]);
    }
    public function create(){
        return view('admin.hospital.create');
    }

    public function save(Request $request){
        $request->validate([
            'name' => 'required',
            'contactNo' => 'required',
            'address' => 'required',
            'email' => 'required | email | unique:hospitals',
            'imageName' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $table = new Hospitals();
        $table->name = $request->name;
        $table->email = $request->email;
        $table->contactNo = $request->contactNo;
        $table->address = $request->address;
        //image upload
        if ($request->hasFile('imageName')) {
            $extension = $request->imageName->extension();
            $filename =  md5(date('Y-m-d H:i:s'));
            $filename = $filename.'.'.$extension;
            $table->imageName = $filename;
            $request->imageName->move('public/uploads/hospital',$filename);
        }
        $table->save();
        return redirect()->to('admin/hospital')->with('message','Hospital Added Successfully.');
    }

    public function edit_page($id){
        $table = Hospitals::find($id);
        return view('admin.hospital.edit')->with(['table'=>$table]);
    }
    public function edit(Request $request){
        $request->validate([
            'name' => 'required',
            'contactNo' => 'required',
            'address' => 'required',
            'email' => 'required | email',
            'imageName' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $table = Hospitals::find($request->id);
        $table->name = $request->name;
        $table->email = $request->email;
        $table->contactNo = $request->contactNo;
        $table->address = $request->address;
        if ($request->hasFile('imageName')) {

            // previous file delete
            $file = public_path('uploads/hospital/'.$table->imageName);
            if(file_exists($file)){
                unlink($file);
            }
            // previous file delete

            $extension = $request->imageName->extension();
            $filename =  md5(date('Y-m-d H:i:s'));
            $filename = $filename.'.'.$extension;
            $table->imageName = $filename;
            $request->imageName->move('public/uploads/hospital',$filename);
        }
        $table->save();
        return redirect()->to('admin/hospital')->with('message','Hospital edited Successfully.');
    }

    public function del($id){
        $table = Hospitals::find($id);
        // previous file delete
        $file = public_path('uploads/hospital/'.$table->imageName);
        if(file_exists($file)){
            unlink($file);
        }
        // previous file delete
        $table->delete();
        return redirect()->back()->with('message','Department deleted Successfully.');
    }
}
