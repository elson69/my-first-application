<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Job;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create a test user
        // User::factory()->create([
        //     'first_name' => 'John',
        //     'last_name'  => 'Doe',
        //     'email'      => 'test@example.com',
        // ]);

        // Create 10 unique tags
        $tags = Tag::factory(10)->create();

        // Create 20 jobs and attach 2 random tags to each
        Job::factory(20)->create()->each(function ($job) use ($tags) {
            $job->tags()->attach($tags->random(2));
        });
    }
}
