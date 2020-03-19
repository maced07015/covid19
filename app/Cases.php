<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    protected $fillable = [
        'total_confirmed',
        'total_deaths',
        'total_recovered',
        'name',
        'last_updated',
        'display_name',
        'lat',
        'long',
        'parent_name'
    ];
}
