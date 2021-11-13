

@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h1>

    <p>By. <a href="#" style="text-decoration: none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" style="text-decoration: none">{{ $post->category->name }}</a></p>

   {!! $post->body !!}

    <a href="/posts" class="d-block mt-3">Back to Posts</a>
@endsection 



