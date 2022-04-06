<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = ['course_name', 'exam_type', 'lowest_passing_grade', 'best_grade', 'ec'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
