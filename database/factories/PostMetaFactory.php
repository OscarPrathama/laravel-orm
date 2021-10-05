<?php

namespace Database\Factories;

use App\Models\{Post, PostMeta};
use Illuminate\Database\Eloquent\Factories\Factory;

class PostMetaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PostMeta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $images = array(
            'hashirama.jpg', 'tobirama.jpg', 'madara.jpg', 'zetsu.jpg', 'uchiha-itachi.jpg',
            'tobirama.jpg', 'madara.jpg', 'konan.jpg', 'naruto.jpg', 'uchiha-sasuke.jpg',
            'hidan.jpg', 'killer-bee.jpg', 'lee.jpg', 'sakura.jpg', 'uchiha-obito.jpg'
        );
        return [
            'post_id' => Post::all()->random()->id, 
            'image' => $this->faker->randomElement($images),
        ];
    }
}
