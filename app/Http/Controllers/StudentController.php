<?php

namespace App\Http\Controllers;

use App\Models\LearningCenter;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $learningcenter = LearningCenter::all();
        return view('student', [
            'client' => 'aluno',
            'learningcenters' => $learningcenter
        ]);
    }
}
