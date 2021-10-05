<?php

namespace Database\Factories;

use App\Models\{ Post, Category, PostCategory };
use Illuminate\Database\Eloquent\Factories\Factory;

class PostCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PostCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id' => Post::all()->random()->id,
            'cat_id' => Category::all()->random()->id,
            'status' => $this->faker->randomElement(['draft', 'publish', 'pending']),
        ];
    }
}
