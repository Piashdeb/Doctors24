<?php

namespace App\Http\Controllers\Admin;

use App\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppointmentController extends Controller
{
    public function index(){
        $table = Appointment::orderBy('created_at','DESC')->where('status','Pending')->get();
        return view('admin.appointment.index')->with(['table'=>$table]);
    }

    public function processed(){
        $table = Appointment::orderBy('created_at','DESC')->where('status','Done')->get();
        return view('admin.appointment.processed')->with(['table'=>$table]);
    }

    public function processed_app($id){
        $table = Appointment::find($id);
        $table->status = 'Done';
        $table->save();
        return redirect()->back()->with('message','Complete Process');
    }
}
