<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()    
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $request->validate([           
            'username'=>['required', 'min:3', 'max:10', 'regex:/^[a-zA-Z][a-zA-Z0-9]*$/'],           
            'password'=>['required', 'min:8']
        ]);

        if(!auth()->attempt($request->only('username', 'password'), $request->remember))
        {
            return back()->with('mensaje', 'Credenciales incorrectas');
        }    
        return redirect()->route('muro.index', ['user' => $request->username]);
    }
}
