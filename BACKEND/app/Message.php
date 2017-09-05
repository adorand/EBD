<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $incrementing = false;
    protected $fillable = [ 'id', 'theme', 'auteur', 'fichier', 'created_at', 'updated_at' ];

    public function group()
    {
        return $this->belongsTo('\App\Auteur', 'auteur', 'id');
    }

    public function hasauteur()
    {
        return $this->hasOne('App\Auteur', 'id', 'auteur');
    }
}
