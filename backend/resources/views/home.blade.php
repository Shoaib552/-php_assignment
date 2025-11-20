@extends('layout')

@section('content')

<h1 class="mb-4">Latest Posts</h1>

@if($latestPosts->count() > 0)
    <div class="list-group">
        @foreach ($latestPosts as $post)
            <a href="/blog/{{ $post->slug }}" class="list-group-item list-group-item-action">
                <h5>{{ $post->title }}</h5>
                <small class="text-muted">
                    Published on {{ $post->created_at->format('d M, Y') }}
                </small>
            </a>
        @endforeach
    </div>
@else
    <p>No posts available.</p>
@endif

@endsection
