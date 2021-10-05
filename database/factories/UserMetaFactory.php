<?php

namespace Database\Factories;

use App\Models\{User, UserMeta};
use Illuminate\Database\Eloquent\Factories\Factory;

class UserMetaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserMeta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $countries = array('India', 'Indonesia', 'America', 'England', 'Aljazair', 'Germany', 'Brazil', 'China', 'Korea', 'Japan', 'Singapura', 'Malaysia', 'Africa');
        return [
            'user_id' => User::all()->random()->id,
            'country' => $this->faker->randomElement($countries),
        ];
    }
}
