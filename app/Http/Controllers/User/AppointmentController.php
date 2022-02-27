<?php

namespace App\Http\Controllers\User;

use App\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AppointmentController extends Controller
{
    public function save(Request $request){
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'prefer_date' => 'required',
            'prefer_time' => 'required',

        ]);
        $maxValue = Appointment::max('serialNo');

        $date = $request->prefer_date;
        $time = $request->prefer_time;

        $table = new Appointment();
        $table->name = $request->name;
        $table->gender = $request->gender;
        $table->age = $request->age;
        $table->address = $request->address;
        $table->contactNo = $request->phone;
        $table->email = $request->email;
        $table->message = $request->message;
        $appointment_date = db_date($date).' '.date('h:i:s', strtotime($time));
        $table->appointmentTime = $appointment_date;
        $table->serialNo = ($maxValue + 1);
        $table->doctorID = $request->doctorID;
        $table->save();

        return redirect()->back()->with('message','Appointment successful & Your serial No is :'.$table->serialNo);
    }
}
