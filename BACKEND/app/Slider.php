<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    public $incrementing=false;
    protected $fillable = [ 'id', 'nompage', 'image', 'created_at' ];
}
