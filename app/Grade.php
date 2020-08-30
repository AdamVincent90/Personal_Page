<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = ['id', 'module', 'grade', 'learning_outcome', 'year'];
    public $timestamps = false;
}
