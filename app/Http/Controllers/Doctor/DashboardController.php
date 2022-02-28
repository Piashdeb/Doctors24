<?php

namespace App\Http\Controllers\Doctor;
use App\Appointment;
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
}
