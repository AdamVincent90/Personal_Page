<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grade;

class GradeController extends Controller
{
    protected function route() {
       $grades = Grade::all();
        return view('grades')->with('grades', $grades);
    }

    protected function create() {
        Grade::create([
            'module' => 'Formal Specification',
            'grade' => 'A',
            'learning_outcome' => 'Learn knowledge in Z notation to understand the use cases and importance of formal specifications in software development',
            'year' => 2
        ]);
    }
}
