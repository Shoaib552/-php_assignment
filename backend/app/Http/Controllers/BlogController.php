<?php

namespace App\Http\Controllers;

use App\Models\Post;

class BlogController extends Controller
{
    // Blog listing
    public function index()
    {
        $posts = Post::where('is_published', true)
            ->latest()
            ->paginate(10);

        return view('blog.index', compact('posts'));
    }

    // Blog detail
    public function show($slug)
    {
        $post = Post::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        return view('blog.show', compact('post'));
    }
}
