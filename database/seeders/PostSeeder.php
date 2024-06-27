<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        // Example seeding logic
        for ($i = 0; $i < 10; $i++) {
            Post::create([
                'title' => $faker->sentence,
                'date' => $faker->date,
                'content' => $faker->paragraph,
            ]);
        }
    }
}
