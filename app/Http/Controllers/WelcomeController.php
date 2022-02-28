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
    $post = Post::with("translations")->orderBy('created_at', 'DESC')->take(2)->get();
    $banner = Banner::with("translations")->orderBy('created_at', 'DESC')->take(1)->get();
    $element = FourElements::with("translations")->orderBy('created_at', 'DESC')->take(1)->get();
    $belement = BodyElements::with("translations")->orderBy('created_at', 'DESC')->take(1)->get();
    $counter = Counter::with("translations")->orderBy('created_at', 'DESC')->take(1)->get();
    $about = About::with("translations")->orderBy('created_at', 'DESC')->take(1)->get();
    $bh = BlogHome::with("translations")->orderBy('created_at', 'DESC')->take(1)->get();
    $footer = Footer::with("translations")->orderBy('created_at', 'DESC')->take(1)->get();

    return view('welcome')->with([
      'question' => $question->translate(session("lang"), "en"),
      'user' => $user,
      'post' => $post->translate(session("lang"), "en"),
      'banner' => $banner->translate(session("lang"), "en"),
      'element' => $element->translate(session("lang"), "en"),
      'belement' => $belement->translate(session("lang"), "en"),
      'about' => $about->translate(session("lang"), "en"),
      'bh' => $bh->translate(session("lang"), "en"),
      'counter' => $counter->translate(session("lang"), "en"),
      'footer' => $footer->translate(session("lang"), "en")
    ]);
  }
}
