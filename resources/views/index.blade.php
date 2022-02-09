<!DOCTYPE html>
<html lang="en-us">

@include("./generic/head")

<body>

@include("./generic/header")

<main>
    <section class="wallpaper" style="background-image: url(assets/images/index/index_bg.png);">
        <div class="wallpaper-text large-title">
            <br>
            <h1>Welcome to my Website!</h1>
        </div>
    </section>

    <section class="index-column-container">
        <section>
            <h1>Hello there!</h1>
            My name is Tim.
            This website was made for a college assignment at the HZ,
            where we had to make a website with HTML, CSS and JavaScript.
            On this website, you’ll find some information about me,
            my education and a little bit about programming.
            I hope you enjoy browsing this website as much as I enjoyed making it!
        </section>

        <section>
            <h1>Pages</h1>
            <p>Click on any of these cards to go to the desired page.</p>

            <div class="flex" style="justify-content: left;">
                <a href="profile.html">
                    <div class="navcard">
                        <img src="/assets/images/index/index_profile.png" alt="Profile Icon">
                        <div class="centered">
                            Profile
                        </div>
                    </div>
                </a>

                <a href="dashboard.html">
                    <div class="navcard">
                        <img src="/assets/images/index/index_dashboard.png" alt="Dashboard Icon">
                        <div class="centered">
                            Dashboard
                        </div>
                    </div>
                </a>

                <a href="blog.html">
                    <div class="navcard">
                        <img src="/assets/images/index/index_blog.png" alt="Blog Icon">
                        <div class="centered">
                            Blog
                        </div>
                    </div>
                </a>

                <a href="faq.html">
                    <div class="navcard">
                        <img src="/assets/images/index/index_faq.png" alt="FAQ Icon">
                        <div class="centered">
                            FAQ
                        </div>
                    </div>
                </a>

            </div>
        </section>
    </section>

    <section class="wallpaper" style="background-image: url(/assets/images/index/index_profile_section.png);">
        <div class="wallpaper-text text-align-right">
            <h1>Profile</h1>
            <p>On this page I will talk a bit more about myself.<br>
                Who I am, my hobbies and interests, that sort of thing.</p>
            <a href="profile.html">Go to my profile &#8594;</a>
        </div>
    </section>
    <section class="wallpaper" style="background-image: url(/assets/images/index/index_dashboard_section.png);">
        <div class="wallpaper-text text-align-left">
            <h1>Dashboard</h1>
            <p>The dashboard page visualizes all my study progress, <br>
                displaying my grades, EC and other progress in tables and bars.</p>
            <a href="dashboard.html">Go to my dashboard &#8594;</a>
        </div>
    </section>
    <section class="wallpaper" style="background-image: url(/assets/images/index/index_blog_section.png);">
        <div class="wallpaper-text text-align-right">
            <h1>Blog</h1>
            <p>Here you'll find some articles about me, the HZ, ICT and more.<br>
                I hope you enjoy.</p>
            <a href="blog.html">Go to my blog &#8594;</a>
        </div>
    </section>
    <section class="wallpaper" style="background-image: url(/assets/images/index/index_faq_section.png);">
        <div class="wallpaper-text text-align-left">
            <h1>Frequently Asked Questions</h1>
            <p>Ever wondered how to print a document at the HZ? Or what to do when you are ill? <br>
                You can find answers to your pressing questions in the FAQ!</p>
            <a href="faq.html">Go to the FAQ &#8594;</a>
        </div>
    </section>
</main>

@include("./generic/footer");
@include("./generic/scripts");

</body>

</html>
