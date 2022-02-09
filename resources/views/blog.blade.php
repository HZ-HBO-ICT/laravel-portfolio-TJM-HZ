<!DOCTYPE html>
<html lang="en-us">

@include('./generic/head');

<body>

@include('/generic/header')

<main>

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
            <a href="blog/website-improvements.html">
                <div class="blog-card">
                    <img src="assets/images/index/index_blog.png" alt="Default Blog Post Image">

                    <div class="blog-card-text">
                        <h1>Website Improvements</h1>
                        <p>A summary of improvements I made in response to feedback</p>
                        <p><small class="text-muted">Posted on 08-10-2021, last updated on 12-10-2021</small></p>
                    </div>
                </div>
            </a>

            <a href="blog/on-the-topic-of-study-choice.html">
                <div class="blog-card">
                    <img src="assets/images/index/index_blog.png" alt="Default Blog Post Image">

                    <div class="blog-card-text">
                        <h1>On the topic of study choice</h1>
                        <p>Why I chose to study ICT at HZ</p>
                        <p><small class="text-muted">Posted on 13-09-2021, last updated on 12-10-2021</small></p>
                    </div>
                </div>
            </a>

            <a href="blog/swot-analysis.html">
                <div class="blog-card">
                    <img src="assets/images/blog/swot.png" alt="SWOT Analysis Chart">

                    <div class="blog-card-text">
                        <h1>SWOT Analysis</h1>
                        <p>Strengths, Weaknesses, Oppurtunities, Threats</p>
                        <p><small class="text-muted">Posted on 13-09-2021, last updated on 12-10-2021</small></p>
                    </div>
                </div>
            </a>

            <a href="blog/my-prior-experience-with-programming.html">
                <div class="blog-card">
                    <img src="assets/images/index/index_blog.png" alt="Default Blog Post Image">

                    <div class="blog-card-text">
                        <h1>My prior experience with Programming</h1>
                        <p>I mean, it's something</p>
                        <p><small class="text-muted">Posted on 13-09-2021, last updated on 12-10-2021</small></p>
                    </div>
                </div>
            </a>

            <a href="blog/what-is-full-stack-development.html">
                <div class="blog-card">
                    <img src="assets/images/blog/fullstack.png" alt="LAMP Stack Example">

                    <div class="blog-card-text">
                        <h1>What is Full Stack Development?</h1>
                        <p>Front-end, Back-end and the Full Stack</p>
                        <p><small class="text-muted">Posted on 13-09-2021, last updated on 12-10-2021</small></p>
                    </div>
                </div>
            </a>
        </div>
    </section>
</main>

@include('./generic/footer')

@include('./generic/scripts')
</body>

</html>