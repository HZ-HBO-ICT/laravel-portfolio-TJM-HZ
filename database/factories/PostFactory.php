<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{

    protected $model = Post::class;

    public function definition()
    {
        return [
            'title' => $this->faker->text(20),
            'url' => $this->faker->phoneNumber,
            'description' => $this->faker->text(30),
            'body' => $this->faker->text(500)
        ];
    }
}
