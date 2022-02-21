@extends('layout')

@section('css')
@endsection()

@section('main')
    <section class="text-align-left">
    <h1>Edit Blog Post</h1>

        <form method="POST" action="/blog/{{$post->url}}">
            @csrf
            @method('PUT')
            <div>
                <label for="title">Title</label>

                <div>
                    <input type="text" name="title" id="title" value="{{$post->title}}">
                </div>
            </div>

            <div>
                <label for="description">Description</label>

                <div>
                    <input type="text" name="description" id="description" value="{{$post->description}}">
                </div>
            </div>

            <div>
                <label for="url">url</label>

                <div>
                    <input type="text" name="url" id="url" value="{{$post->url}}">
                </div>
            </div>

            <div>
                <label for="body">Body</label>

                <div>
                    <input type="text" name="body" id="body" value="{{$post->body}}">
                </div>
            </div>

            <div>
                <div>
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>

        <form method="POST" action="/blog/{{ $post->url }}">
            @csrf
            @method('DELETE')
                <button type="submit">Delete</button>
        </form>

    </section>
@endsection()
