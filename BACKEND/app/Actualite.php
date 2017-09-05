<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    public $incrementing=false;
    protected $fillable = [ 'id', 'titre' , 'texte' , 'fichier' , 'dateact' , 'categorie' ];
}
