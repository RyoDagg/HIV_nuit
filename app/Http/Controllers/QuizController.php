<?php

namespace App\Http\Controllers;
use App\Models\Questions;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function index()
    {
        $question = Questions::with("translations")->orderBy('type', 'DESC')->get();
      $user = Auth::id();

        return view('quizz')->with(['question'=>$question->translate(session("lang"),"en"), 'user' => $user]);
       
    }
}


