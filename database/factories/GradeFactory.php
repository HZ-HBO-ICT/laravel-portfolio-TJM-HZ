<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'course_name' => $this->faker->text(10),
            'exam_type' => 'exam placeholder',
            'best_grade' => $this->faker->numberBetween(1, 10),
            'ec' => $this->faker->numberBetween(1, 10),
        ];
    }
}
