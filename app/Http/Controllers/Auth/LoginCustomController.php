<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginCustomController extends Controller
{
    public function loginCustom (Request $request){
        $email = $request->email;
        $password = $request->password;
        
        $hashedPassword = User::where('email', $request->email)->first();
        $user = User::where('email', $request->email)->first();

        if ($hashedPassword && Hash::check($password, $hashedPassword->password)) {
            Auth::login($user);
            return redirect()->route('home');
        }else{
            return back()->with('error','Email/password yang Anda masukkan salah');
        }                                
    }
}
