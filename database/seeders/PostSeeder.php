<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            ['title' => 'Health Tips for a Better Life', 'content' => 'Here are some tips to improve your health...', 'user_id' => 1],
            ['title' => 'Latest Sports News', 'content' => 'In the world of sports today...', 'user_id' => 2],
            ['title' => 'Top Technology Trends', 'content' => 'Technology is evolving faster than ever...', 'user_id' => 3],
            ['title' => 'Education in the Modern World', 'content' => 'The education system has seen many changes...', 'user_id' => 4],
            ['title' => 'Entertainment Highlights', 'content' => 'What’s new in the entertainment industry...', 'user_id' => 5],
            ['title' => 'How to Stay Fit', 'content' => 'Fitness is key to a healthy lifestyle...', 'user_id' => 6],
            ['title' => 'Gaming: Past and Present', 'content' => 'The gaming world has evolved a lot...', 'user_id' => 7],
            ['title' => 'The Future of Work', 'content' => 'Workspaces are changing dramatically...', 'user_id' => 8],
            ['title' => 'Understanding Mental Health', 'content' => 'Mental health is a key part of overall well-being...', 'user_id' => 9],
            ['title' => 'Traveling on a Budget', 'content' => 'Here’s how to travel the world on a budget...', 'user_id' => 10],
        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
