<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class train extends Model
{   public function reserve()
    {
        return $this->belongsTo('App\reserve','train_id');
    }
    public function details()
    {
        return $this->hasMany('App\train_details','id');
    }
}
