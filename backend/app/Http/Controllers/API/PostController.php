<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Str;

class PostController extends Controller
{
    // List all posts
    public function index()
    {
        return Post::latest()->get();
    }

    // Create a post
    public function store(PostRequest $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);
        $data['user_id'] = $request->user()->id;

        $post = Post::create($data);
        return response()->json($post, 201);
    }

    // Show single post
    public function show($id)
    {
        return Post::findOrFail($id);
    }

    // Update post
    public function update(PostRequest $request, $id)
    {
        $post = Post::findOrFail($id);
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);

        $post->update($data);
        return response()->json($post);
    }

    // Delete post
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return response()->json(['message'=>'Post deleted']);
    }

    // Publish/Unpublish toggle
    public function publish($id)
    {
        $post = Post::findOrFail($id);
        $post->is_published = !$post->is_published;
        $post->save();

        return response()->json($post);
    }
}
