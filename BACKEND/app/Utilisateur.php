<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    protected $fillable = [ 'id','nomcomplet', 'login', 'password', 'phone', 'droits' , 'photo' ];

    public function group()
    {
        return $this->hasMany('\App\Utilisateur','id');
    }
}

