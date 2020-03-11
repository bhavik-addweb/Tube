<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class playlist extends Model
{
    protected $table='play';
    protected $fillable = [
         'play_name','uid'
    ];
}
