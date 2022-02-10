<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tim's Website | Profile</title>
    <meta name="description"
          content="Here you'll find a bit of information about me. Who I am, what I like, what I do, that sort of thing.">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="bs5/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="canonical" href="https://tjm-hz.github.io/profile">
</head>


<body>

@include("./generic/header")

<main>
    <section class="wallpaper" style="background-image: url(assets/images/profile/bg_profile.png);">
        <div class="wallpaper-text">
            <h1>Profile</h1>
            <p>On this page, I will talk a bit more about myself.<br>
                Who I am, my hobbies and interests, that sort of thing.</p>
        </div>
    </section>

    <section>
        <h2>A bit about me</h2>
        <p>My name is Tim. I’m 19 years old and I live in Oostkapelle.<br>
            I live near the sea and I'm surrounded by forest<br>
            It really is quite a lovely place.</p>
        <img src="assets/images/profile/oostkapelle-beach-flyover.jpg" alt="Oostkapelle Beach Flyover">
        <div class="image-desc">A beach close to where I live</div>
        <br>
        <p>I recently started studying HBO-ICT at the Hogeschool Zeeland (HZ), because I want to learn how to design
            and develop software, <br>
            so that maybe one day, I can develop software for creatives (more on that can be found
            <a href=blog/on-the-topic-of-study-choice.html>here</a>). <br>
            I have a small amount of prior experience with programming, mostly stemming from my short-lived
            university experience (which I explain in more detail in <a
                href=blog/my-prior-experience-with-programming.html>this article</a>).<br>
            So far, my studies at the HZ are going well and I’m having a pretty good feeling about all this.
        </p>
        <p>On the rest of this page, you can read about my hobbies and interests.</p>
    </section>

    <section>
        <h2>Video Games</h2>
        <p>Par for the course for an ICT student I'd wager.</p>
        <p>Anyway, my taste in video games really is quite varied. <br>
            I like anything from relaxing single-player indie experiences to bombastic multiplayer movement
            shooters. <br>
        <p>I believe video games to be an artform with a lot of potential. <br>
            Not necessarily because of the graphics or the sounds, <br>
            but because of the oppurtunities interactivity bring to artistic expression,<br>
            whether that be big, dumb action or something deeper, something heartfelt, something unlike anything
            else.</p>
        <p>Below you'll find a small selection of some of my favorite video games.<br>
            Clicking on the cards will open a new tab with a trailer or store page for the game.<br>
            I highly recommend that you give these a try. You won't regret it.</p>
        <br>
        <div class="flex">
            <div class="profile-vg">
                <a href="https://store.steampowered.com/app/782330/DOOM_Eternal/" target="_blank"
                   rel="noopener noreferrer">
                    <img src="assets/images/profile/vg_doometernal.png" alt="Doom Eternal">
                    <div>
                        DOOM Eternal
                    </div>
                </a>
            </div>
            <div class="profile-vg">
                <a href="https://store.steampowered.com/app/1237970/Titanfall_2/" target="_blank"
                   rel="noopener noreferrer">
                    <img src="assets/images/profile/vg_titanfall2.png" alt="Titanfall 2">
                    <div>
                        Titanfall 2
                    </div>
                </a>
            </div>
            <div class="profile-vg">
                <a href="https://www.youtube.com/watch?v=_zDZYrIUgKE" target="_blank" rel="noopener noreferrer">
                    <img src="assets/images/profile/vg_darksouls.png" alt="Dark Souls">
                    <div>
                        Dark Souls
                    </div>
                </a>
            </div>
            <div class="profile-vg">
                <a href="https://store.steampowered.com/app/400/Portal/" target="_blank" rel="noopener noreferrer">
                    <img src="assets/images/profile/vg_portal.png" alt="Portal">
                    <div>

                        Portal
                    </div>
                </a>
            </div>
            <div class="profile-vg">
                <a href="https://store.steampowered.com/app/504230/Celeste/" target="_blank"
                   rel="noopener noreferrer">
                    <img src="assets/images/profile/vg_celeste.png" alt="Celeste">
                    <div>
                        Celeste
                    </div>
                </a>
            </div>
            <div class="profile-vg">
                <a href="https://store.steampowered.com/app/391540/Undertale/" target="_blank"
                   rel="noopener noreferrer">
                    <img src="assets/images/profile/vg_undertale.png" alt="Undertale">
                    <div>
                        Undertale
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section>
        <h2>Music</h2>
        <p>There's something special about listening to ambient music while strolling over the beach at sunset.</p>
        <p>I'm mostly into ambient or otherwise relaxing music - <br>
            the type where you can lay down on your bed with an empty head <br>
            for what feels like minutes but what turns out to be an hour. <br>
            I can also appreciate some good soul, jazz and EDM.</p>
        <p>Below you'll find a small selection of Bandcamp embeds for you to listen to to get an idea of what kind
            of music I like to listen to.</p>
        <br>
        <div class="profile-music">
            <iframe style="border: 0; width: 350px; height: 470px;"
                    src="https://bandcamp.com/EmbeddedPlayer/album=944225423/size=large/bgcol=ffffff/linkcol=0687f5/tracklist=false/track=3090375761/transparent=true/"
                    seamless><a href="https://c418.bandcamp.com/album/excursions">Excursions by C418</a></iframe>
            <iframe style="border: 0; width: 350px; height: 470px;"
                    src="https://bandcamp.com/EmbeddedPlayer/album=249810342/size=large/bgcol=ffffff/linkcol=0687f5/tracklist=false/track=1476658331/transparent=true/"
                    seamless><a href="https://music.midwestcollective.us/album/odyssey">Odyssey by HOME</a></iframe>
        </div>
    </section>

    <section>
        <h1>Blender</h1>
        <p>No, not the thing that you use to make shakes. I'm talking about the software.</p>
        <p>Blender is a free and open-source 3D suite, allowing you to make some pretty crazy stuff.
            <br>
            I used it to create some of the images you see on this website. <br>
            I'd say it's also part of the reason <a href=blog/on-the-topic-of-study-choice.html>why I started
                studying ICT</a>.<br>
            The idea that an application so powerful and versatile is<br>
            free and open-source is pretty inspiring and made me want<br>
            to aid in developing such software myself one day.
        </p>
    </section>
</main>

@include("./generic/footer")
@include("./generic/scripts")

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="js/gtt-button.js"></script>
</body>

</html>
