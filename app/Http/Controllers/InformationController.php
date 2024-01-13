<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class InformationController extends Controller
{
    public function view()
    {
        $user= auth()->user();
        return view('Information',['user'=>$user]);
    }

    public function modification(Request $request)
    {
        $request->validate([
            "name"=>"nullable|string|max:255|min:2",
            "surname"=>"nullable|string|max:255|min:2",
            "email"=>"nullable|string|email|max:255|min:2",
            "pseudo"=>"nullable|string|max:255|min:2",
            "password"=>"nullable|string|max:255|min:6|confirmed",
            "newsletter"=>'nullable'
        ]);
        
        $user = auth()->user();

        if ($request->filled('name')){
            $user->name = $request->input('name');
        }
        if ($request->filled('surname')){
            $user->surname = $request->input('surname');
        }
        if ($request->filled('pseudo')){
            $user->pseudo = $request->input('pseudo');
        }
        if ($request->filled('email')){
            $user->email = $request->input('email');
        }
        if ($request->filled('password')){
            $user->password = Hash::make($request->input('password'));
        }

        $newsletterValue = $request->has('newsletter') ? 1 : 0;

       $user->newsletter = $newsletterValue;

        $user->save();

        return redirect()->route('Learn.index')->with('success', 'Vos informations ont été mises à jour avec succès.');

    }
}
