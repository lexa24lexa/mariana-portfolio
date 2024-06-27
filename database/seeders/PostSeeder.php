<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * @property $faker
 */
class PostSeeder extends Seeder
{
    public function run()
    {
        // Clear existing records to start fresh (optional)
        DB::table('posts')->truncate();

        // Generate new data using Laravel's Faker
        for ($i = 0; $i < 10; $i++) {
            Post::create([
                'title' => $this->faker->sentence,
                'date' => $this->faker->dateTimeBetween('2024-06-01', '2024-06-30')->format('Y-m-d'),
                'content' => $this->faker->paragraph,
            ]);
        }

        Post::factory()->count(4)->create();
    }
}
