<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function authenticate(Request $request){
        $credential = $request->validate([
            'email'=> 'required',
            'password'=> 'required',
        ]);

        if (Auth::attempt($credential)){
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->with('LoginError', 'Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function register(){
        return view('register');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);

        $email = DB::table('users')->where('email', $request->email)->first();

        if($email){
            return redirect('/register');
        }else{
            DB::table('users')->insert([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
            ]);
            return redirect('/login');
        }
    }
}
