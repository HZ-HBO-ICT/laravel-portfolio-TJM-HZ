@extends('layout')

@section('css')
    <link rel="stylesheet" href="/css/blog.css">
@endsection()

@section('main')
    <article>
        <a href="/blog">&#8592; Back to Blog</a>

        <div class="text-align-center"><h1> {{$post->title}} </h1>
            <h2> {{$post->description}} </h2>
            <br>

            {{$post->body}}

            <br>
        <a href="/blog">&#8592; Back to Blog</a>
    </article>
@endsection()
