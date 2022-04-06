<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'CU_code' => $this->faker->text(5),
            'name' => $this->faker->text(5),
            'credits' => $this->faker->numberBetween(1, 5),
            'passed_at' => $this->faker->date()
        ];
    }
}
