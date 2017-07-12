<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class button extends Model
{
    //


    protected $fillable=['name','href' ];



     public function buttonable()
    {
        return $this->morphTo();
    }
}
