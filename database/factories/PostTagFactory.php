<?php

namespace Database\Factories;

use App\Models\{Post, Tag, PostTag};
use Illuminate\Database\Eloquent\Factories\Factory;

class PostTagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PostTag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id' => Post::all()->random()->id,
            'tag_id' => Tag::all()->random()->id,
            'status' => $this->faker->randomElement(['draft', 'publish', 'pending']),
        ];
    }
}
