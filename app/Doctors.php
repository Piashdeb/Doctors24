<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    protected $table = 'doctors';
    protected $primaryKey = 'doctorID';
    protected $fillable = [
        'name', 'email','imageName','contactNo','chamber','available_day','departmentID','other_details'
    ];
    public function scopeSearch($query, $search){
        return $query->where('name','like','%'.$search.'%')
            ->orWhere('chamber','like','%'.$search.'%');
    }
    public function dept(){
        return $this->belongsTo('App\Departments','departmentID');
    }
}
