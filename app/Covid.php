<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Covid extends Model
{
    protected $fillable = [
        'total_confirmed',
        'total_deaths',
        'total_recovered'
    ];

    protected $table = 'covids';
}
