<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Post;
use App\Models\Category;
use App\Models\CategoryPost;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Student::factory(10)->create();
        Post::factory(10)->create();
        Category::factory(10)->create();
        CategoryPost::factory(10)->create();
        Comment::factory(10)->create();
    }
}
