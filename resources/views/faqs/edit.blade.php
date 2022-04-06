@extends('layout')

@section('css')
@endsection()

@section('main')
    <section class="text-align-left">
    <h1>Edit FAQ Entry</h1>

        <form method="POST" action="/faq/{{$faq->id}}">
            @csrf
            @method('PUT')
            <div>
                <label for="question">Question</label>

                <div>
                    <input type="text" name="question" id="question" value="{{$faq->question}}">
                    @error('question')
                    <p>{{$errors->first('question')}}</p>
                    @enderror
                </div>
            </div>

            <div>
                <label for="answer">Answer</label>

                <div>
                    <input type="text" name="answer" id="answer" value="{{$faq->answer}}">
                    @error('answer')
                    <p>{{$errors->first('answer')}}</p>
                    @enderror
                </div>
            </div>

            <div>
                <div>
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>

        <form method="POST" action="/faq/{{ $faq->id }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>

    </section>
@endsection()
