<?php

namespace App\Http\Controllers;
use App\Models\Questions;
use App\Models\Banner;
use App\Models\FourElements;
use App\Models\BodyElements;
use App\Models\Counter;
use App\Models\About;
use App\Models\BlogHome;
use App\Models\Footer;
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
      $post = Post::orderBy('created_at', 'DESC')->take(2)->get();
      $banner = Banner::orderBy('created_at', 'DESC')->take(1)->get();
      $element = FourElements::orderBy('created_at', 'DESC')->take(1)->get();
      $belement = BodyElements::orderBy('created_at', 'DESC')->take(1)->get();
      $counter = Counter::orderBy('created_at', 'DESC')->take(1)->get();
      $about = About::orderBy('created_at', 'DESC')->take(1)->get();
      $bh = BlogHome::orderBy('created_at', 'DESC')->take(1)->get();
      $footer = Footer::orderBy('created_at', 'DESC')->take(1)->get();
      
        return view('welcome')->with(['question'=>$question, 
        'user' => $user, 'post'=>$post, 'banner'=>$banner, 
        'element'=>$element, 'belement'=>$belement,'about'=>$about,
        'bh'=>$bh, 'counter'=>$counter, 'footer'=>$footer]);
       
    }
}
