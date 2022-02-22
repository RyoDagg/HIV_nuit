<?php

namespace App\Http\Controllers;
use App\Models\Questions;
use TCG\Voyager\Models\Post;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function index()
    {
        $question = Questions::inRandomOrder()->take(6)->get();
      $user = Auth::id();
      $post = Post::inRandomOrder()->take(2)->get();

        return view('welcome')->with(['question'=>$question, 'user' => $user, 'post'=>$post]);
       
    }
}
