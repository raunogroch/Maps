<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dot extends Model
{
    protected $fillable = [
        'latitude',
        'longitude',
        'name'
    ];
}
