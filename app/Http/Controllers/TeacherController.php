<?php

namespace App\Http\Controllers;

use App\Models\LearningCenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $learningcenters = LearningCenter::where('id_teacher', $id)->get();

        return view('teacher', [
            'client' => 'professor',
            'learningcenters' => $learningcenters
        ]);
    }
}
