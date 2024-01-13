<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function view()
    {
        $user = auth()->user();
        return view('Home',['user'=>$user]);
    }
}
