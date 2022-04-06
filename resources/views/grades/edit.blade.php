@extends('layout')

@section('css')
@endsection()

@section('main')
<section class="text-align-left">
    <h1>New Grade</h1>

    <form method="POST" action="{{route('grades.show', $grade)}}">
        @csrf
        @method('PUT')
        <div>
            <label for="course_name">Course Name</label>

            <div>
                <input type="text" name="course_name" id="course_name" value="{{$grade->course_name}}">
                <p>{{$errors->first('course_name')}}</p>
            </div>

        </div>

        <div>
            <label for="exam_type">Exam Type</label>

            <div>
                <input type="text" name="exam_type" id="exam_type" value="{{$grade->exam_type}}">
                <p>{{$errors->first('exam_type')}}</p>
            </div>

        </div>

        <div>
            <label for="lowest_passing_grade">Lowest Passing Grade</label>

            <div>
                <input type="number" name="lowest_passing_grade" id="lowest_passing_grade" value="{{$grade->lowest_passing_grade}}">
                <p>{{$errors->first('lowest_passing_grade')}}</p>
            </div>
        </div>
        <div>
            <label for="ec">EC</label>

            <div>
                <input type="number" name="ec" id="ec" value="{{$grade->ec}}">
                <p>{{$errors->first('ec')}}</p>
            </div>
        </div>
        <div>
            <label for="best_grade">Best Grade</label>

            <div>
                <input type="number" name="best_grade" id="best_grade" value="{{$grade->best_grade}}"> <!--TODO / HELP How could I handle this automatically? There is a function for it in the Grade model? -->
                <p>{{$errors->first('best_grade')}}</p>
            </div>
        </div>
        <div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </div>
    </form>

    <form method="POST" action="{{route('grades.destroy', $grade)}}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

</section>

@endsection
