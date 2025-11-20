<?php

namespace App\Http\Controllers;

use App\Models\Post;

class BlogController extends Controller
{
    // Blog listing
    public function index()
    {
        $posts = Post::where('is_published', true)->latest()->get();
        return view('blog', compact('posts'));
    }

    // Blog detail
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('blog-detail', compact('post'));
    }
}
