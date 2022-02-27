<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $primaryKey = 'blogID';
    protected $fillable = ['title', 'description','imageName','userID'
    ];
}
