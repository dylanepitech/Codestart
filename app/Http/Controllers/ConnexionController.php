<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConnexionController extends Controller
{
    public function view()
    {
        if (auth()->user()){
            return redirect()->route('Learn.index');
        }
        $user= auth()->user();
        return view('Connexion', ['user'=>$user]);
    }

    public function connexion(Request $request)
    {
        if(Auth::attempt(['email' => strtolower($request->input('email')), 'password' => $request->input('password')])
        ){
                return redirect()->route('Learn.index');
             }
             return back()->withInput()->withErrors(['identifiant' => 'Identifiant ou mot de passe incorrect.']);
        

    }

    public function deconexion()
    {
        Auth::logout();
        return redirect()->route('Home.index');
    }
}
