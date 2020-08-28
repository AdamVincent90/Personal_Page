<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = ['module', 'grade', 'learning_outcome', 'year'];
}
