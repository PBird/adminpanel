<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class page extends Model
{
    //

    protected $fillable=['title','description','placement','status' ];


     public function template()
    {
        return $this->belongsTo('App\template');
    }
     public function images()
    {
        return $this->morphToMany('App\image', 'imageable');
    }

     public function features()
    {
        return $this->belongsToMany('App\feature');
    }
     public function buttons()
    {
        return $this->morphMany('App\button', 'buttonable');
    }
    public function nav()
  {
    return $this->hasOne('App\nav');
  }

  public function delete()
{
    $features =$this->features;
    $this->features()->delete();
    $this->buttons()->delete();
     foreach ($features as $feature) {
       $feature->pages()->detach();
       $feature->images()->detach();
       $feature->buttons()->delete();

    }
    $this->images()->detach(); // DELETE * FROM files WHERE user_id = ? query

    parent::delete();
}




}
