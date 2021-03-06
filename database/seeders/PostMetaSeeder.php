<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PostMeta;

class PostMetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostMeta::factory()
            ->count(47)
            ->create();
    }
}
