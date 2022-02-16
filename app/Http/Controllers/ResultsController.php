<?php

namespace App\Http\Controllers;
use App\Models\Results;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultsController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
       // $user = Auth::id();
      //  $result = Results::inRandomOrder()->take(1)->where('user_id','$uid')->first();
      //  return view('result')->with(['result'=>$result, 'user' => $user]);

      $user = Auth::id();
      $result = Results::inRandomOrder()->take(1)->where('user_id',$user)->get();
      return view('result')->with(['result'=>$result, 'user' => $user]);


    }
}
