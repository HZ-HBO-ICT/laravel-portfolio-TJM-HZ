@extends('layout')



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$post->title}}</title>
    <meta name="description" content={{$post->slug}}>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/bs5/css/bootstrap.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/blog.css">
    <link rel="canonical" href=`https://tjm-hz.github.io/blog/{{$post->url}}`>
</head>
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
