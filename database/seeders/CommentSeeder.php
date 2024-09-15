<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comments = [
            ['content' => 'Great article!', 'user_id' => 1, 'post_id' => 1],
            ['content' => 'Very informative.', 'user_id' => 2, 'post_id' => 2],
            ['content' => 'I learned something new.', 'user_id' => 3, 'post_id' => 3],
            ['content' => 'Thanks for sharing!', 'user_id' => 4, 'post_id' => 4],
            ['content' => 'This is awesome.', 'user_id' => 5, 'post_id' => 5],
            ['content' => 'Great read.', 'user_id' => 6, 'post_id' => 6],
            ['content' => 'Helpful post!', 'user_id' => 7, 'post_id' => 7],
            ['content' => 'This was exactly what I was looking for.', 'user_id' => 8, 'post_id' => 8],
            ['content' => 'Really appreciate this.', 'user_id' => 9, 'post_id' => 9],
            ['content' => 'Well written!', 'user_id' => 10, 'post_id' => 10],
        ];

        foreach ($comments as $comment) {
            Comment::create($comment);
        }
    }
}
