@extends ('layout')

@section('css')
<link rel="stylesheet" href="css/dashboard.css">
@endsection()
@section('main')
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
                    @foreach($grades as $grade)
                        @if($grade->best_grade === null)
                            <tr class="bg-info">
                            @elseif($grade->best_grade >= $grade->lowest_passing_grade)
                            <tr class="bg-success">
                            @else
                            <tr class="bg-danger">
                        @endif
                            <td class="bg-whitesmoke">PLACEHOLDER</td>

                            <td>{{$grade->course_name}}</td>
                            <td>{{$grade->ec}}</td>
                            <td>typegoeshere</td>
                            <td>{{$grade->best_grade}}</td>
                        </tr>
                    @endforeach
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

                @for($i = 0; $i < count($grades); $i++)

                @endfor

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
@endsection()
