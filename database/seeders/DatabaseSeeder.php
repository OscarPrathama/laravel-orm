<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            UserMetaSeeder::class,
            CategorySeeder::class,
            PostSeeder::class,
            PostMetaSeeder::class,
            PostCategorySeeder::class,
            TagSeeder::class,
            PostTagSeeder::class,
            CommentSeeder::class,
        ]);
    }
}
