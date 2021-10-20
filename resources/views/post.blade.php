@extends('layouts.main')

@section('container')
    <h2>{{ $post->title }}</h2>
    {{-- <h5>{{ $post["author"] }}</h5> --}}

    <p>By. Raditya Gilang Wicaksono in <a href="/categories/{{ $post->category->slug }}">{{  $post->category->name }}</p></a>

    {!!  $post->body !!}
    <br><br>
    <a href="/posts">Back to Posts</a>
@endsection