<?php

namespace App\Http\Controllers;

use App\Models\LearningCenter;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $learningcenters = LearningCenter::all();

        return view('teacher', [
            'client' => 'professor',
            'learningcenters' => $learningcenters
        ]);
    }
}
