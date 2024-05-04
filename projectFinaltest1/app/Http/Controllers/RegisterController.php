<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function register(Request $request){
        $validation = $request->validate([
            'name'=>'required|min:3|max:40',
            'email'=>'required|email|unique:admins,email|regex:/^.+@gmail\.com$/i',
            'password'=>'required|min:6|max:12',
            'phone'=>'required|string|regex:/^08\d{9,}$/',
        ]);

        $validation['password'] = bcrypt($validation['password']);

        User::create($validation);

        return redirect('/login');
    }
}
