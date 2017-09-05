<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $fillable = [ 'id', 'titre' , 'description' ];

    public function galeries()
    {
        return $this->hasMany('\App\Galerie','evenement','id');
    }
}
