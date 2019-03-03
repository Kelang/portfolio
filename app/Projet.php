<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    public function collaborateurs(){

        return $this->belongsToMany('App\Collaborateur');
    }

    public function images(){

        return $this->hasMany('App\Image');
    }
}
