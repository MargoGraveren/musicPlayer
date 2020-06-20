<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public function song(){
        return $this->hasMany('App\Songs');
    }

    public function artist(){
        return $this->belongsTo('App\Artist');
    }
}
