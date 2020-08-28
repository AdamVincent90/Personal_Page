<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hobby;

class AboutController extends Controller
{
    protected function route() {
        $hobbies = Hobby::all();
        return view('about')->with('hobbies', $hobbies);
    }

    protected function create() {
        Hobby::create(['name' => 'Martial Arts', 'img' => 'img']);

    }
}
