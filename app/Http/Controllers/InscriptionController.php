<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function view()
    {
        if (auth()->user()){
            return redirect()->route('Learn.index');
        }
        return view('Inscription');
    }
    public function validation(Request $request)
    {
        $messages = [
            'name.required' => 'Le nom est obligatoire.',
            'name.string' => 'Le nom doit être une chaîne de caractères.',
            'name.max' => 'Le nom ne doit pas dépasser :max caractères.',
            'name.min' => 'Le nom doit comporter au moins :min caractères.',
        
            'surname.required' => 'Le prénom est obligatoire.',
            'surname.string' => 'Le prénom doit être une chaîne de caractères.',
            'surname.max' => 'Le prénom ne doit pas dépasser :max caractères.',
            'surname.min' => 'Le prénom doit comporter au moins :min caractères.',
        
            'email.required' => 'L\'adresse e-mail est obligatoire.',
            'email.email' => 'L\'adresse e-mail doit être valide.',
            'email.unique'=> 'L\'adresse email est deja utiliser.',
        
            'pseudo.required' => 'Le pseudo est obligatoire.',
            'pseudo.string' => 'Le pseudo doit être une chaîne de caractères.',
            'pseudo.max' => 'Le pseudo ne doit pas dépasser :max caractères.',
            'pseudo.min' => 'Le pseudo doit comporter au moins :min caractères.',
        
            'password.required' => 'Le mot de passe est obligatoire.',
            'password.string' => 'Le mot de passe doit être une chaîne de caractères.',
            'password.max' => 'Le mot de passe ne doit pas dépasser :max caractères.',
            'password.min' => 'Le mot de passe doit comporter au moins :min caractères.',
            'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
        ];

        $request->validate([
                'name' => 'required|string|max:255|min:2',
                'surname' => 'required|string|max:255|min:2',
                'email' => 'required|unique:users,email',
                'pseudo' => 'required|string|max:255|min:5',
                'password' => 'required|string|max:255|min:8|confirmed',
        ], $messages);

        $newsletterValue = $request->has('newsletter') ? 1 : 0;

        $user = new User([
            "name"=>$request->input('name'),
            "surname"=>$request->input('surname'),
            "email"=>strtolower($request->input('email')),
            "pseudo"=>$request->input('pseudo'),
            "password"=>bcrypt($request->input('password')),
            "cgv"=>$request->input('cgv'),
            "newsletter"=>$newsletterValue
        ]);


        $user->save();

        return redirect()->route('Connexion.index')->with('success', 'Votre compte à étais créer avec succes !');
    }
}
