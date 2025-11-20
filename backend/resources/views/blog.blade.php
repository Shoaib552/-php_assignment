@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <h1>All Blog Posts</h1>
    <div class="list-group">
        @foreach($posts as $post)
            <a href="{{ url('/blog/'.$post->slug) }}" class="list-group-item list-group-item-action">
                <h5>{{ $post->title }}</h5>
                <p>{{ Str::limit($post->content, 100) }}</p>
            </a>
        @endforeach
    </div>
@endsection
