@extends ('layout')

@section('css')
    <link rel="stylesheet" href="/css/faq.css">
@endsection()
@section('main')
    <section class="wallpaper" style="background-image: url(assets/images/faq/bg_faq.png);">
        <div class="wallpaper-text">
            <h1>Frequently Asked Questions</h1>
            <p>Ever wondered how to print a document at the HZ? Or what to do when you are ill? <br>
                You can find answers to your pressing questions below!</p>
        </div>
    </section>
    <section style="text-align: left">
    <ul>
        @foreach($faqs as $faq)
            <li>{{$faq->question}}</li>
            <ul><li>{{$faq->answer}}</li></ul>
        @endforeach
    </ul>
    </section>
@endsection()
