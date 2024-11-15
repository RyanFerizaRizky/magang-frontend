<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){

        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        try {

            if(Auth::attempt($credentials)){
                $request->session()->regenerate();

                return redirect()->route('home');
            }

            dd('Error');

        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }

    public function register(Request $request){
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            // 'akses' => ['required'],
        ]);
 
        try {

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                // 'akses' => $request->akses,
            ]);

            Auth::login($user);

            return redirect()->route('home');

        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
