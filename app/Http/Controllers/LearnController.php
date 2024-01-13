<?php

namespace App\Http\Controllers;

use App\Models\Quizzhtml;
use Illuminate\Http\Request;

class LearnController extends Controller
{
  

    public function view()
    {
        $user= auth()->user();
        $username = auth()->user()->id;
        $quizzligne = Quizzhtml::where('username', $username)->first();
        $countTrue = 0;
        if($quizzligne)
        {
            $countTrue = collect($quizzligne->toArray())->filter(function ($value) {
                return $value === 1;
            })->count();

        }
        return view('Learn',['user'=>$user, 'countTrue'=>$countTrue]);
    }

    public function viewhtml()
    {
        $user= auth()->user();
        return view('html/html',['user'=>$user]);
    }

    public function viewquizzhtml()
    {
        $user= auth()->user();
        $username = auth()->user()->id;
        $quizz = Quizzhtml::findByUsername($username);

        if($quizz)
        {
            return redirect()->route("Learn.index")->with('error', 'Vous ne pouvez réaliser qu\'une seule fois le quizz');
        }
        return view('html/Quizzhtml',['user'=>$user]);
    }
    public function quizzhtml(Request $request)
    {
        $request->validate([
            "question1" => "required",
            "question2" => "required",
            "question3" => "required",
            "question4" => "required",
            "question5" => "required",
            "question6" => "required",
            "question7" => "required",
            "question8" => "required",
            "question9" => "required",
            "question10" => "required",
        ]);

        $reponseQuestion1 = $request->input("question1") === "1" ? true : false;
        $reponseQuestion2 = $request->input("question2") === "2" ? true : false;
        $reponseQuestion3 = $request->input("question3") === "2" ? true : false;
        $reponseQuestion4 = $request->input("question4") === "1" ? true : false;
        $reponseQuestion5 = $request->input("question5") === "3" ? true : false;
        $reponseQuestion6 = $request->input("question6") === "2" ? true : false;
        $reponseQuestion7 = $request->input("question7") === "3" ? true : false;
        $reponseQuestion8 = $request->input("question8") === "2" ? true : false;
        $reponseQuestion9 = $request->input("question9") === "2" ? true : false;
        $reponseQuestion10 = $request->input("question10") === "1" ? true : false;
        if (auth()->check())
        {
            $username = auth()->user()->id;
        }

        $reponse = new Quizzhtml([
            "question1" => $reponseQuestion1,
            "question2" =>$reponseQuestion2,
            "question3" =>$reponseQuestion3,
            "question4" =>$reponseQuestion4,
            "question5" =>$reponseQuestion5,
            "question6" =>$reponseQuestion6,
            "question7" =>$reponseQuestion7,
            "question8" =>$reponseQuestion8,
            "question9" =>$reponseQuestion9,
            "question10" =>$reponseQuestion10,
            "username"=> $username
        ]);

        $reponse->save();
        
        return redirect()->route('Learn.index')->with('success', "Quizz validé avec succès !");

    }
    public function viewcss()
    {
        return view('html/css');
    }
}
