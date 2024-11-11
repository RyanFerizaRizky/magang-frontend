<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function view_login(){
        return view('auth.login');
    }

    public function view_register(){
        return view('auth.register');
    }

    public function login(){

    }

    public function register(Request $request){
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            'akses' => ['required'],
        ]);
 
        try {

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'akses' => $request->akses,
            ]);

            Auth::login($user);

            return redirect()->route('home');

        } catch (\Throwable $th) {
            return back()->with('message',['text' => 'Register gagal.', 'class' => 'danger']);
        }
    }
}
