<?php

namespace App\Http\Controllers\Admin;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Departments;
use App\Doctors;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DoctorController extends Controller
{
    public function index(){
        $table = Doctors::orderBy('created_at','DESC')->get();
        return view('admin.doctor.index')->with(['table'=>$table]);
    }
    public function create(){
        $dept = Departments::orderBy('created_at','DESC')->get();
        return view('admin.doctor.create')->with(['dept'=>$dept]);
    }

    public function save(Request $request){
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'contactNo' => 'required',
            'department' => 'required',
            'chamber' => 'required',
            'email' => 'required | email | unique:doctors',
            'imageName' => 'required|max:2048',
        ]);
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'userType' => 'Doctor'
            ]);

            $table = new Doctors();
            $table->name = $request->name;
            $table->departmentID = $request->department;
            $table->email = $request->email;
            $table->contactNo = $request->contactNo;
            $table->other_details = $request->other_details;
            $table->chamber = $request->chamber;
            $table->user_id = $user->id;
            //image upload
            if ($request->hasFile('imageName')) {
                $extension = $request->imageName->extension();
                $filename =  md5(date('Y-m-d H:i:s'));
                $filename = $filename.'.'.$extension;
                $table->imageName = $filename;
                $request->imageName->move('public/uploads/doctor',$filename);
            }
            $table->save();

            return redirect()->to('admin/doctor')->with('message','Doctor Added Successfully.');
    }

    public function edit_page($id){
        $table = Doctors::find($id);
        $dept = Departments::orderBy('created_at','DESC')->get();
        return view('admin.doctor.edit')->with(['table'=>$table,'dept' => $dept]);
    }
    public function edit(Request $request){
        $request->validate([
            'name' => 'required',
            'contactNo' => 'required',
            'department' => 'required',
            'chamber' => 'required',
            'email' => 'required | email',
            'imageName' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $table = Doctors::find($request->id);
        $table->name = $request->name;
        $table->departmentID = $request->department;
        $table->email = $request->email;
        $table->contactNo = $request->contactNo;
        $table->other_details = $request->other_details;
        $table->chamber = $request->chamber;
        if ($request->hasFile('imageName')) {

            // previous file delete
            $file = public_path('uploads/doctor/'.$table->imageName);
            if(file_exists($file)){
                unlink($file);
            }
            // previous file delete

            $extension = $request->imageName->extension();
            $filename =  md5(date('Y-m-d H:i:s'));
            $filename = $filename.'.'.$extension;
            $table->imageName = $filename;
            $request->imageName->move('public/uploads/doctor',$filename);
        }
        $table->save();
        return redirect()->to('admin/doctor')->with('message','Doctor edited Successfully.');
    }

    public function del($id){
        $table = Doctors::find($id);
        // previous file delete
        $file = public_path('uploads/doctor/'.$table->imageName);
        if(file_exists($file)){
            unlink($file);
        }
        // previous file delete
        $table->delete();
        return redirect()->back()->with('message','Doctor deleted Successfully.');
    }
}
