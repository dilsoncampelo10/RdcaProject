<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function signup(Request $request)
    {
        $teacher = new Teacher();

        $hash = Hash::make($request->password);
        $teacher->name = $request->name;
        $teacher->enroll = $request->enroll;
        $teacher->area = $request->area;
        $teacher->password = $hash;
        $teacher->save();

        return redirect('/');
    }
    // public function authenticate(Request $request)
    // {
    //     $enroll = $request->enroll;
    //     $password = $request->password;


    //     $credentials = [
    //         'enroll' => $enroll,
    //         'password' => $password,
    //     ];

    //     if (Auth::guard('teachers')->attempt($credentials)) {
    //         $request->session()->regenerate();

    //         return redirect()->intended('teacher');
    //     }

    //     return back()->withErrors([
    //         'email' => 'The provided credentials do not match our records.',
    //     ])->onlyInput('email');
    // }
    public function authenticate(Request $request)
    {
        
        $enroll = $request->enroll;
        $password = $request->password;

        $teacher = Teacher::where('enroll',$enroll)->first();

       

        if($enroll == $teacher->enroll){
            if(password_verify($password, $teacher->password)){
                $request->session()->regenerate();

                return redirect()->intended('professor');
            }
        }

        return redirect('/');
        
    }
}
