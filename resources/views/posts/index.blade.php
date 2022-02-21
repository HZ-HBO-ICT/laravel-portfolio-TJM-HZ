@extends ('layout')

@section('css')
<link rel="stylesheet" href="/css/blog.css">
@endsection()

@section('main')
    <section class="wallpaper" style="background-image: url(assets/images/blog/bg_blog.png);">
        <div class="wallpaper-text">
            <h1>Blog</h1>
            <p>Here you'll find some articles about me, the HZ, ICT and more.<br>
                I hope you enjoy.</p>
        </div>
    </section>

    <section>
        <h1>Posts</h1>
        Click on the cards below to read more!
    </section>

    <section class="blog-card-section">
        <div class="blog-card-container">
            @foreach ($posts as $post)
                <a href="blog/{{$post->url}}">
                    <div class="blog-card">
                        <img src="{{$post->preview_image_source}}" alt="Blog Post Image">

                        <div class="blog-card-text">
                            <h1>{{$post->title}}</h1>
                            <p>{{$post->description}}</p>
                            <p><small class="text-muted">Posted at {{$post->created_at}}, last updated at {{$post->updated_at}}</small></p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endsection()
