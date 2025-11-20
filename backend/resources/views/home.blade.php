@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Latest Posts</h1>
    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                        <a href="{{ url('/blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
