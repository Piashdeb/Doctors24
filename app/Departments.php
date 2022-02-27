<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{
    protected $table = 'departments';
    protected $primaryKey = 'departmentID';
    protected $fillable = ['name','imageName'
    ];
}
