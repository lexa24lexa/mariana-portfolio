<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    public function run()
    {
        // Clear existing records to start fresh (optional)
        Post::truncate();

        // Generate 4 new records using PostFactory
        Post::factory(4)->create();
    }
}
