@extends('layout')

@section('css')
@endsection()

@section('main')
    <section class="text-align-left">
    <h1>New Article</h1>

        <form method="POST" action="{{route('posts.index')}}">
            @csrf
            <div>
                <label for="title">Title</label>

                <div>
                    <input type="text" name="title" id="title">
                    <p>{{$errors->first('title')}}</p>
                </div>
            </div>

            <div>
                <label for="description">Description</label>

                <div>
                    <input type="text" name="description" id="description">
                    <p>{{$errors->first('description')}}</p>
                </div>
            </div>

            <div>
                <label for="body">Body</label>

                <div>
                    <input type="text" name="body" id="body">
                    <p>{{$errors->first('body')}}</p>
                </div>
            </div>

            <div>
                <div>
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>

    </section>
@endsection()
