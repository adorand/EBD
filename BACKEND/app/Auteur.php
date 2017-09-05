<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auteur extends Model
{
    protected $fillable = [ 'nom' ];

    public function pensees()
    {
        return $this->hasMany('App\Pensee','auteur','id');
    }

    public function messages()
    {
        return $this->hasMany('App\Message','auteur','id');
    }
}
