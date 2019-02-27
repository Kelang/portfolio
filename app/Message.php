<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable =[
        'prenom',
        'nom',
        'courriel',
        'message'
    ];
}
