<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repository extends Model
{
    protected  $primaryKey = 'repository_id';

    //Allow mass assignment
    protected $fillable = [
        'repository_id',
        'name',
        'languages',
        'description',
        'link'
    ];
}
