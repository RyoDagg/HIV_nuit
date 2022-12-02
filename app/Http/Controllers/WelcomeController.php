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
use Illuminate\Support\Facades\App;
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


    App::setLocale(session("lang"));

    return view('welcome')->with([
      'question' => $question->translate(session("lang"), "fr"),
      'user' => $user,
      'post' => $post->translate(session("lang"), "fr"),
      'banner' => $banner->translate(session("lang"), "fr"),
      'element' => $element->translate(session("lang"), "fr"),
      'belement' => $belement->translate(session("lang"), "fr"),
      'about' => $about->translate(session("lang"), "fr"),
      'bh' => $bh->translate(session("lang"), "fr"),
      'counter' => $counter->translate(session("lang"), "fr"),
      'footer' => $footer->translate(session("lang"), "fr")
    ]);
  }
}
