<?php

namespace App\Http\Controllers;

use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        if ($request->query('category')) {
            // $category = Category::where('slug', $request->query('category'))->first();
            $post = Post::where('category_id', $request->query('category'))->orderBy('created_at', 'DESC')->paginate(3);
        } else {
            $post = Post::orderBy('created_at', 'DESC')->paginate(3);
        }
        $category = Category::inRandomOrder()->get();

        return view('blog.index')->with(['post' => $post, 'category' => $category]);
    }


    public function show($slug)
    {
        $post = Post::with("translations")->where('slug', $slug)->firstOrFail();

        $Recpost = Post::with("translations")->orderBy('created_at', 'DESC')->take(3)->get();

        $category = Category::with("translations")->inRandomOrder()->get();

        return view('blog.show')->with(['post' => $post->translate(session("lang"), "en"), 'recpost' => $Recpost->translate(session("lang"), "en"),  'category' => $category->translate(session("lang"), "en")]);
    }
    public function search()
    {
        $category = Category::with("translations")->inRandomOrder()->get();

        request()->validate([
            'q' => 'required|min:3'
        ]);

        $q = request()->input('q');
        $post = Post::with("translations")
            ->where('title', 'like', "%$q%")
            ->orWhere('body', 'like', "%$q%")
            ->orWhere('excerpt', 'like', "%$q%")
            ->orWhere('meta_keywords', 'like', "%$q%")
            ->paginate(3);

        return view('blog.search')->with(['post' => $post, 'category' => $category->translate(session("lang"),"en")]);
    }
}
