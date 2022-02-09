<!DOCTYPE html>
<html lang="en-us">

@include("./generic/head")

<body>

@include("./generic/header")

<main>
    <section class="wallpaper" style="background-image: url(assets/images/dashboard/bg_dashboard.png);">
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

@include("./generic/footer");
@include("./generic/scripts");

</body>

</html>
