<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{User, Contact};

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::factory()->count(5)->create();
        User::factory()
            ->has(Contact::factory()->count(1))
            ->count(5)
            ->create();
    }
}
