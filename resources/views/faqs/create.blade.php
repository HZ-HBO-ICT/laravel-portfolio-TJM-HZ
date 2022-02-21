@extends('layout')

@section('css')
@endsection()

@section('main')
    <section class="text-align-left">
    <h1>New FAQ entry</h1>

        <form method="POST" action="/faq">
            @csrf
            <div>
                <label for="question">Question</label>

                <div>
                    <input type="text" name="question" id="question">
                </div>
            </div>

            <div>
                <label for="answer">Answer</label>

                <div>
                    <input type="text" name="answer" id="answer">
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
