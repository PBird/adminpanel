<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class template extends Model
{
    //

  protected $fillable = ['name', 'file_name' ];
    public function pages()
    {
        return $this->hasMany('App\page');
    }
}

