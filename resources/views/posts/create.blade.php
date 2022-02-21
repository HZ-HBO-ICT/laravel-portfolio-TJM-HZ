@extends('layout')

@section('css')
@endsection()

@section('main')
    <section class="text-align-left">
    <h1>New Article</h1>

        <form method="POST" action="/blog">
            @csrf
            <div>
                <label for="title">Title</label>

                <div>
                    <input type="text" name="title" id="title">
                </div>
            </div>

            <div>
                <label for="description">Description</label>

                <div>
                    <input type="text" name="description" id="description">
                </div>
            </div>

            <div>
                <label for="url">url</label>

                <div>
                    <input type="text" name="url" id="url">
                </div>
            </div>

            <div>
                <label for="body">Body</label>

                <div>
                    <input type="text" name="body" id="body">
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
