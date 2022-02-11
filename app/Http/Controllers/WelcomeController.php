<?php

namespace App\Http\Controllers;
use App\Models\Questions;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function index()
    {
        $question = Questions::inRandomOrder()->take(6)->get();
      $user = Auth::id();

        return view('welcome')->with(['question'=>$question, 'user' => $user]);
       
    }
}
