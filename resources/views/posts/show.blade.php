@extends('layout')

@section('css')
    <link rel="stylesheet" href="/css/blog.css">
@endsection()

@section('main')
    <article>
        <a href="{{route('posts.index')}}">&#8592; Back to Blog</a>

        <div class="text-align-center"><h1> {{$post->title}} </h1>
            <h2> {{$post->description}} </h2>
            <br>

            {{$post->body}}

            <br>
        <a href="{{route('posts.index')}}">&#8592; Back to Blog</a>
    </article>
@endsection()
