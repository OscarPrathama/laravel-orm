<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{Category, Post};

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory()
            ->count(173)
            ->create();

        $categories = Category::all();

        Post::All()->each(function ($post) use ($categories) { 
            // every post id got category id
            // $post->categories()->saveMany($categories);
            
            // 
            $post->categories()->attach(
                $categories->random(rand(1, count($categories)))->pluck('id')->toArray()
            );
        });
    }
}
