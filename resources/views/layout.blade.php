<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<title>Tim's Website | Home</title>
    <meta name="description" content="My website for ICT classes at the HZ University of Applied Sciences.">-->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="bs5/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    @yield('css')
    <!--<link rel="canonical" href="https://tjm-hz.github.io">-->

</head>

<body>

<img src="/assets/images/gtt-arrow.png" id="go-to-top" alt="Go to top" onclick="topFunction()">

<header>
    <nav>
        <a class="lettermark" href="/">Tim's Website</a>

        <a class="{{ Request::path() === '/' ? 'currentpage' : '' }}" href="/">Home</a>
        <a class="{{ Request::path() === 'profile' ? 'currentpage' : '' }}" href="profile">Profile</a>
        <a class="{{ Request::path() === 'dashboard' ? 'currentpage' : '' }}" href="dashboard">Dashboard</a>
        <a class="{{ Request::path() === 'blog' ? 'currentpage' : '' }}" href="blog">Blog</a>
        <a class="{{ Request::path() === 'faq' ? 'currentpage' : '' }}" href="faq">FAQ</a>
    </nav>
</header>


<main>
    @yield('main')
</main>

<footer>
    <div class="flex-container">
        <div class="footer-column">
            <h3>
                <a href="/" class="lettermark">Tim's Website</a>
            </h3>
        </div>

        <div class="footer-column">
            <h3>
                Website Navigation
            </h3>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="profile">Profile</a></li>
                <li><a href="dashboard">Dashboard</a></li>
                <li><a href="blog">Blog</a></li>
                <li><a href="faq">FAQ</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h3>Useful Links</h3>
            <ul>
                <li><a href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/HZ-Course-and-Examination-Regulations-2021-2022.pdf"
                       target="_blank" rel="noopener noreferrer">HZ
                        HBO-ICT CER 2021-2022</a></li>
                <li><a href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/11.-Uitvoeringsregeling-OER-ICT-Voltijd-2021-2022.pdf"
                       target="_blank" rel="noopener noreferrer">Implementation
                        Regulations 2021-2022</a></li>
                <li><a href="https://learn.hz.nl/" target="_blank" rel="noopener noreferrer">Learn Environment</a>
                </li>
                <li><a href="https://teams.microsoft.com/l/team/19%3a827654897ab746089c081f24aff1c984%40thread.skype/conversations?groupId=337e8cca-f67d-4132-9fa9-b0c761bbeb94&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c"
                       target="_blank" rel="noopener noreferrer">MS
                        Teams</a></li>
                <li><a href=https://learn.hz.nl/course/view.php?id=21135#section-0 target="_blank"
                       rel="noopener noreferrer">Study Progress</a></li>

                <li><a href="https://github.com/TJM-HZ/TJM-HZ.github.io" target="_blank"
                       rel="noopener noreferrer">Github environment</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h3>
                <a href="https://hz.nl/en/" target="_blank" rel="noopener noreferrer">
                    <img src="/assets/images/hz-logo.png" alt="HZ Logo" width="233px" height="60px">
                </a>
            </h3>
        </div>

    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="/js/gtt-button.js"></script>


</body>

</html>
