<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pensee extends Model
{
    public $incrementing = false;
    protected $fillable = [ 'id', 'datepassage', 'theme', 'auteur', 'texte', 'image' ];

    public function group() {
        return $this->belongsTo('\App\Auteur', 'auteur', 'id');
    }

    public function hasauteur() {
        return $this->hasOne('\App\Auteur', 'id','auteur');

    }
}