<?php

namespace App\Http\Controllers;

use App\Repository;

class HomeController extends Controller
{
    protected function route()
    {
        $repos = Repository::all();
        return view('home')->with('repos', $repos);
    }

    protected function create()
    {
        //Without Form
        Repository::create([
            'name' => 'Sound Mixer',
            'description' => 'A sound annotator that mixes two different audio to export.',
            'link' => 'github.com/AdamVincent90/SoundAnnotator',
            'languages' => 'MATLAB'
        ]);
    }
}
