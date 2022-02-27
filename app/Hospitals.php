<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospitals extends Model
{
    protected $table = 'hospitals';
    protected $primaryKey = 'hospitalID';
    protected $fillable = [
        'name', 'email','address','contactNo','imageName'
    ];
}
