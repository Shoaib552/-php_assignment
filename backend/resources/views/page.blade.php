@extends('layout')

@section('content')

<h1 class="mb-4">{{ $page->title }}</h1>

<div>
    {!! $page->content !!}
</div>

@endsection
