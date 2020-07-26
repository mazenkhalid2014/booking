<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reserve extends Model
{

    
    public function train()
    {
        return $this->hasMany('App\train','train_id');
    }
}
