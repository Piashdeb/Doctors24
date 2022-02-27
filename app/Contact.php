<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $primaryKey = 'contactID';
    protected $fillable = ['name', 'email','subject','message','userID'
    ];
}
