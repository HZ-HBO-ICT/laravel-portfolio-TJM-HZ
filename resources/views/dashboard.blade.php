<!DOCTYPE html>
<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tim's Website | Dashboard</title>
    <meta name="description"
          content="The dashboard page visualizes all my study progress, displaying my grades, EC and other progress in tables and bars.">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./public/bs5/css/bootstrap.css">
    <link rel="stylesheet" href="./public/css/styles.css">
    <link rel="stylesheet" href="./public/css/dashboard.css">
    <link rel="canonical" href="https://tjm-hz.github.io/dashboard">
</head>

<body>
<!--GO TO TOP BUTTON-->
<img src="./public/assets/images/gtt-arrow.png" id="go-to-top" alt="Go to top" onclick="topFunction()">

<header>
    <nav>
        <a class="lettermark" href="index.html">Tim's Website</a>

        <a href="index.html">Home</a>
        <a href="profile.html">Profile</a>
        <a class="currentpage" href="dashboard.html">Dashboard</a>
        <a href="blog.html">Blog</a>
        <a href="faq.html">FAQ</a>
    </nav>
</header>

<main>
    <section class="wallpaper" style="background-image: url(./public/assets/images/dashboard/bg_dashboard.png);">
        <div class="wallpaper-text">
            <h1>Dashboard</h1>
            <p>The dashboard page visualizes all my study progress, <br>
                displaying my grades, EC and other progress in tables and bars.</p>
        </div>
    </section>

    <section>
        <h2>Study Monitor</h2>
        <p>Here you can find my grades and EC for every subject of every quarter.</p>

        <div id="studymonitor">
            <div class="table-responsive" id="gradetable">
                <table class="table table-bordered align-middle">
                    <thead>
                    <tr>
                        <th>Quartile</th>

                        <th>Course</th>
                        <th>EC</th>
                        <th>Exam</th>
                        <th>Grade</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-info">
                        <td rowspan="3" class="bg-whitesmoke">1</td>

                        <td>Programme and Career Orientation</td>
                        <td>2.5</td>
                        <td>Assessment</td>
                        <td>...</td>
                    </tr>
                    <tr class="bg-info">
                        <td>Computer Science Basics</td>
                        <td>5</td>
                        <td>Written</td>
                        <td>...</td>
                    </tr>
                    <tr class="bg-info">
                        <td>Programming Basics</td>
                        <td>5</td>
                        <td>Case Study</td>
                        <td>...</td>
                    </tr>

                    <tr>
                        <td colspan="5"></td>
                    </tr>

                    <tr class="bg-info">
                        <td rowspan="2" class="bg-whitesmoke">2</td>

                        <td rowspan="2">Object Oriented Programming</td>
                        <td rowspan="2">10</td>
                        <td>Case Study</td>
                        <td>...</td>
                    </tr>
                    <tr class="bg-info">
                        <td>Project</td>
                        <td>...</td>
                    </tr>

                    <tr>
                        <td colspan="5"></td>
                    </tr>

                    <tr class="bg-info">
                        <td rowspan="4" class="bg-whitesmoke">3</td>

                        <td>Framework Development 1</td>
                        <td>5</td>
                        <td>Case Study</td>
                        <td>...</td>
                    </tr>
                    <tr class="bg-info">
                        <td rowspan="3">Framework Project 1</td>
                        <td rowspan="3">7.5</td>
                        <td>Project</td>
                        <td>...</td>
                    </tr>
                    <tr class="bg-info">
                        <td>Assessment</td>
                        <td>...</td>
                    </tr>
                    <tr class="bg-info">
                        <td>Report</td>
                        <td>...</td>
                    </tr>

                    <tr>
                        <td colspan="5"></td>
                    </tr>
                    <tr class="bg-info">
                        <td rowspan="3" class="bg-whitesmoke">4</td>
                        <td rowspan="3">Framework Project 2</td>
                        <td rowspan="3">10</td>
                        <td>Portfolio</td>
                        <td>...</td>
                    </tr>
                    <tr class="bg-info">
                        <td>Project</td>
                        <td>...</td>
                    </tr>
                    <tr class="bg-info">
                        <td>Assessment</td>
                        <td>...</td>
                    </tr>

                    <tr>
                        <td colspan="5"></td>
                    </tr>
                    <tr class="bg-info">
                        <td class="bg-whitesmoke">Entire Year</td>

                        <td>Personal Professional Development</td>
                        <td>12.5</td>
                        <td>Portfolio</td>
                        <td>...</td>
                    </tr>

                    <tr>
                        <td colspan="5"></td>
                    </tr>
                    <tr class="bg-info">
                        <td class="bg-whitesmoke">Whenever</td>

                        <td>Personal Professional Development</td>
                        <td>2.5</td>
                        <td>Personality</td>
                        <td>...</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="text-center">
                        <tr>
                            <th colspan=3>LEGEND</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="bg-info">Exam to be taken</td>
                            <td class="bg-danger">Insufficient</td>
                            <td class="bg-success">Sufficient</td>

                        </tr>
                        </tbody>
                    </table>
                </div>

                <div>
                    <div class="alert alert-danger" role="alert">
                        &#9888; NBSA BOUNDARY = 60 EC &#9888;<br>
                        Failing to reach at least 60 EC will result in an NBSA (Negative Binding Study Advice),<br>
                        which would likely prevent me from continuing my study.</div>
                </div>

                <div>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 1%" aria-valuenow="50"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress-bar-text">0 / 60 EC EARNED</div>
                </div>
            </div>
        </div>

    </section>
</main>

<footer>
    <div class="flex-container">
        <div class="footer-column">
            <h3>
                <a href="index.html" class="lettermark">Tim's Website</a>
            </h3>
        </div>

        <div class="footer-column">
            <h3>
                Website Navigation
            </h3>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="profile.html">Profile</a></li>
                <li><a href="dashboard.html">Dashboard</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="faq.html">FAQ</a></li>
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
                    <img src="./public/assets/images/hz-logo.png" alt="HZ Logo" width="233px" height="60px">
                </a>
            </h3>
        </div>

    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="./public/js/gtt-button.js"></script>
</body>

</html>
