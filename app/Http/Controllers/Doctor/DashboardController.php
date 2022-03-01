<?php

namespace App\Http\Controllers\Doctor;
use App\Appointment;
use App\Departments;
use App\Doctors;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('doctors.dashboard');
    }

    public function appointments()
    {
        $table = Appointment::orderBy('created_at','DESC')->where('doctorID', auth()->user()->doctor->user_id)->where('status','Pending')->get();
        return view('doctors.appointment.index', compact('table'));
    }

    public function processed()
    {
        $table = Appointment::orderBy('created_at','DESC')->where('doctorID', auth()->user()->doctor->user_id)->where('status','Done')->get();
        return view('doctors.appointment.processed', compact('table'));
    }
    public function processed_app($id){
        $table = Appointment::find($id);
        $table->status = 'Done';
        $table->save();
        return redirect()->back()->with('message','Complete Process');
    }

    public function profile()
    {
        $dept = Departments::all();
        return view('doctors.profile.profile', compact('dept'));
    }

    public function update_profile(Request $request)
    {
        // dd($request->all());
        $user = User::whereId(auth()->user()->id)->with('doctor')->firstOrFail();

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        $filename = auth()->user()->doctor->imageName;

        if ($request->hasFile('imageName')) {

            // previous file delete
            $file = public_path('uploads/doctor/'.auth()->user()->doctor->imageName);
            if(file_exists($file)){
                unlink($file);
            }
            // previous file delete

            $extension = $request->imageName->extension();
            $filename =  md5(date('Y-m-d H:i:s'));
            $filename = $filename.'.'.$extension;
            $request->imageName->move('public/uploads/doctor',$filename);
        }

        $user->doctor->update([
            'name' => $request->name,
            'email' => $request->email,
            'contactNo' => $request->contactNo,
            'chamber' => $request->chamber,
            'other_details' => $request->other_details,
            'imageName' => $filename
        ]);

        return redirect()->back()->with('success', 'profile updated successfully');
    }

    public function available_status_Update()
    {
        $available_status = auth()->user()->doctor->isAvailable == '1' ? 0 : 1;

        Doctors::where('user_id', auth()->user()->id)->update([
            'isAvailable' => $available_status
        ]);

        return back();

    }
}
