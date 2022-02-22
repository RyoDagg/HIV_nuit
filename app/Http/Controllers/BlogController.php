<?php

namespace App\Http\Controllers;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $post = Post::orderBy('created_at', 'DESC')->get();
        $category = Category::inRandomOrder()->get();

        return view('blog.index')->with(['post'=>$post, 'category'=>$category]);
        
    }
   
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        $Recpost = Post::orderBy('created_at', 'DESC')->take(3)->get();

        $category = Category::inRandomOrder()->get();
        
        return view('blog.show')->with(['post'=>$post,'recpost'=>$Recpost,  'category'=>$category]);

    }
}
