<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';
    protected $primaryKey = 'appointmentID';
    protected $fillable = [
        'name', 'email','address','age','contactNo','message','gender','status','serialNo','appointmentTime','prefer_date','doctorID','patientID'
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctors::class, 'doctorID', 'doctorID');
    }
}
