<?php

namespace App\Http\Controllers;
use App\Models\Questions;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $question = Questions::inRandomOrder()->take(6)->get();

        return view('welcome')->with('question', $question);
       
    }
}
