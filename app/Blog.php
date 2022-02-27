<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $primaryKey = 'blogID';
    protected $fillable = ['title', 'description','imageName','userID','blogcatID'
    ];

    public function category(){
        return $this->belongsTo('App\BlogCats','blogcatID');
    }
    public function user(){
        return $this->belongsTo('App\User','userID');
    }

    public function comment(){
        return $this->hasMany('App\BlogComment','blogID');
    }
}
