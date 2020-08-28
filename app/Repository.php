<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repository extends Model
{
    //Allow mass assignment
    protected $fillable = [
        'name',
        'languages',
        'description',
        'link'
    ];
}
