@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{!! $post->content !!}</p>
    <a href="{{ url('/blog') }}" class="btn btn-secondary mt-3">Back to Blog</a>
@endsection
