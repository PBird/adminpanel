<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    //

    protected $fillable = [

                                'name',
                                'path',
                                'description',

                           ];

       public function pages() {

        return $this->morphedByMany('App\page', 'imageable');

    }
     public function features() {

        return $this->morphedByMany('App\feature', 'imageable');

    }
}
