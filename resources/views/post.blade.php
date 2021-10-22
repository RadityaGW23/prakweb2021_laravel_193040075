@extends('layouts.main')

@section('container')
    <h2>{{ $post->title }}</h2>
    {{-- <h5>{{ $post["author"] }}</h5> --}}

    <p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{  $post->category->name }}</p></a>

    {!!  $post->body !!}
    <br><br>
    <a href="/posts" class="d-block">Back to Posts</a>
@endsection