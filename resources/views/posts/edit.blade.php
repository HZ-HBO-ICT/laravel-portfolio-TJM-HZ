@extends('layout')

@section('css')
@endsection()

@section('main')
    <section class="text-align-left">
    <h1>Edit Blog Post</h1>
    
        <form method="POST" action="{{route('posts.show', $post)}}">
            @csrf
            @method('PUT')
            <div>
                <label for="title">Title</label>

                <div>
                    <input type="text" name="title" id="title" value="{{$post->title}}" required>
                    @error('title')
                        <p>{{$errors->first('title')}}</p>
                    @enderror
                </div>
            </div>

            <div>
                <label for="description">Description</label>

                <div>
                    <input type="text" name="description" id="description" value="{{$post->description}}" required>
                    <p>{{$errors->first('description')}}</p>
                </div>
            </div>

            <div>
                <label for="body">Body</label>

                <div>
                    <input type="text" name="body" id="body" value="{{$post->body}}" required>
                    <p>{{$errors->first('body')}}</p>
                </div>
            </div>

            <div>
                <div>
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>

        <form method="POST" action="{{route('posts.index', $post)}}">
            @csrf
            @method('DELETE')
                <button type="submit">Delete</button>
        </form>

    </section>
@endsection()
