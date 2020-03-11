<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class myplaylist extends Model
{
    protected $table='myplaylists';
    protected $fillable = [
        'pid','vid', 'uid',
    ];
}
