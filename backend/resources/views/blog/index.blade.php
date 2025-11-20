@extends('layout')

@section('content')

<h1 class="mb-4">Blog</h1>

@if($posts->count() > 0)
    @foreach ($posts as $post)
        <div class="mb-4 p-3 border rounded">
            <h3>
                <a href="/blog/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h3>

            <small class="text-muted">
                Published on {{ $post->created_at->format('d M, Y') }}
            </small>

            <p class="mt-2">
                {{ Str::limit(strip_tags($post->content), 150) }}
            </p>

            <a href="/blog/{{ $post->slug }}" class="btn btn-primary btn-sm">
                Read More
            </a>
        </div>
    @endforeach

    <div class="mt-4">
        {{ $posts->links() }}
    </div>

@else
    <p>No blog posts found.</p>
@endif

@endsection
