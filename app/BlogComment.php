<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    protected $table = "blog_comments";
    protected $primaryKey = "blogcmtID";
    protected $fillable = ['name','email','comment','blogID','userID'];

    public function user()
    {
        return $this->belongsTo('App\User','userID');
    }

    public function blog(){
        return $this->belongsTo('App\Blog','blogID');
    }
}
