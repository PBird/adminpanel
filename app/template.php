<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class template extends Model
{
    //


    public function pages()
    {
        return $this->hasMany('App\page');
    }
}

