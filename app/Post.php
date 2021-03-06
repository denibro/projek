<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";
    protected $fillable = ["title","body","user_id"]; // ini pake yang Mass Assignment

    public function author(){
        return $this->belongsTo('App\User','user_id');
    }

}
