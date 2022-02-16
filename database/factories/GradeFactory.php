<?php

namespace Database\Factories;

use App\Models\Grade;
use Illuminate\Database\Eloquent\Factories\Factory;

class GradeFactory extends Factory
{

    protected $model = Grade::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_name' => $this->faker->text(10),
            'best_grade' => $this->faker->numberBetween(1, 10),
            'ec' => $this->faker->numberBetween(1, 10),
        ];
    }
}
