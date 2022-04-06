<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grades = Grade::latest()->get();

        return view('grades.index', ['grades' => $grades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('grades.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Grade::create($this->validateGrade($request));

        return redirect(route('grades.index'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Grade $grade)
    {
        return view('grades.edit', compact('grade'));
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(Grade $grade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Grade::where('id', $id)->update($this->validateGrade($request));
        return redirect(route('grades.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Grade $grade)
    {
        $grade->delete();
        return redirect(route('grades.index'));
    }

    public function validateGrade(Request $request): array
    {
        return request()->validate([
            'course_name' => 'required',
            'exam_type' => 'required',
            'lowest_passing_grade' => 'required|numeric|between:0,10',
            'best_grade' => 'required|numeric|between:0,10',
            'ec' => 'required'
        ]);
    }
}
