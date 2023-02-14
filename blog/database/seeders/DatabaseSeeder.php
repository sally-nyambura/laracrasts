<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Category::truncate();
        Post::truncate();

         $user = User::factory()->create();

         $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
         ]);

         $entertainment = Category::create([
            'name' => 'Entertainment',
            'slug' => 'entertainment'
         ]);

         $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
         ]);

         Post::create([
            'user_id' => $user->id,
             'category_id' => $entertainment->id,
             'title' => 'Entertainment title post',
             'slug' => 'entertainment-slug',
             'excerpt' => 'Entertainment post excerpt',
             'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eius eum hic provident unde? Accusantium aliquid corporis dignissimos illum inventore iste libero, magnam neque, perferendis repellendus rerum tempora temporibus voluptas.'
         ]);

         Post::create([
            'user_id' => $user->id,
             'category_id' => $personal->id,
             'title' => 'Personal title post',
             'slug' => 'personal-slug',
             'excerpt' => 'Personal post excerpt',
             'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eius eum hic provident unde? Accusantium aliquid corporis dignissimos illum inventore iste libero, magnam neque, perferendis repellendus rerum tempora temporibus voluptas.'
         ]);

         Post::create([
            'user_id' => $user->id,
             'category_id' => $work->id,
             'title' => 'Work title post',
             'slug' => 'work-slug',
             'excerpt' => 'Work post excerpt',
             'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate eius eum hic provident unde? Accusantium aliquid corporis dignissimos illum inventore iste libero, magnam neque, perferendis repellendus rerum tempora temporibus voluptas.'
         ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
