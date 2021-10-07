<?php

namespace Database\Factories;

use App\Models\{User, Contact};
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = User::all();
        return [
            // 'user_id' => User::factory()->create()->id,
            'user_id' => $this->faker->unique()->numberBetween(1, $users->count()),
            'phone' => $this->faker->phoneNumber,
        ];
    }
}
