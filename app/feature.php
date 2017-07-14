<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feature extends Model
{
    //

    protected $fillable=['title','content','Status' ];


     public function images()
    {
        return $this->morphToMany('App\image', 'imageable');
    }

    public function pages()
    {
        return $this->belongsToMany('App\page');
    }
     public function icons()
    {
        return $this->hasMany('App\icon');
    }
     public function buttons()
    {
        return $this->morphMany('App\button', 'buttonable');
    }






}
