<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCats extends Model
{
    protected $table = "blog_cats";
    protected $primaryKey = "blogcatID";
    protected $fillable = ['name'];

    public function blog(){
        return $this->hasMany('App\Blog','blogcatID');
    }
}
