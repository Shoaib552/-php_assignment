@extends('layout')

@section('content')

<h1 class="mb-3">{{ $post->title }}</h1>

<small class="text-muted d-block mb-4">
    Published on {{ $post->created_at->format('d M, Y') }}
</small>

<div class="mb-5">
    {!! $post->content !!}
</div>

<a href="/blog" class="btn btn-secondary">← Back to Blog</a>

@endsection
