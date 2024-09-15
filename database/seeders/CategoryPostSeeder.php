<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class CategoryPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Attach categories to each post
        $categories = Category::pluck('id')->toArray();
        $posts = Post::all();

        foreach ($posts as $post) {
            // Randomly assign 1 to 3 categories to each post
            $randomCategories = array_rand($categories, rand(1, 3));
            if (is_array($randomCategories)) {
                foreach ($randomCategories as $index) {
                    $post->categories()->attach($categories[$index]);
                }
            } else {
                $post->categories()->attach($categories[$randomCategories]);
            }
        }
    }
}
