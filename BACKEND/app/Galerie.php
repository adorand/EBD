<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galerie extends Model
{
    public $incrementing = false;
    protected $fillable = [ 'id', 'texte', 'fichier', 'auteur' ];

    public function group()
    {
        return $this->belongsTo('\App\Evenement', 'evenement', 'id');
    }

    public function hasevenement()
    {
        return $this->hasOne('\App\Evenement', 'id','evenement');
    }
}
