<?php

namespace Database\Seeders;

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

        // Seeder User
        // User::create([
        //     'name' => 'Komarudin Islam',
        //     'email' => 'komar.network@gmail.com',
        //     'password' => bcrypt('secret')
        // ]);

        // User::create([
        //     'name' => 'Doddy Ferdiansyah',
        //     'email' => 'doddy@gmail.com',
        //     'password' => bcrypt('secret')
        // ]);

        // Seeder Post
        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Judul Post Pertama',
        //     'slug' => 'judul-post-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, labore.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque error harum consectetur rem nisi quos.</p> <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt alias delectus enim quisquam pariatur ex voluptatum repudiandae quidem odio molestiae.</p>'
        // ]);

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Judul Post Kedua',
        //     'slug' => 'judul-post-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, sequi.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque error harum consectetur rem nisi quos.</p> <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt alias delectus enim quisquam pariatur ex voluptatum repudiandae quidem odio molestiae.</p>'
        // ]);

        // Post::create([
        //     'category_id' => 3,
        //     'user_id' => 1,
        //     'title' => 'Judul Post Ketiga',
        //     'slug' => 'judul-post-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. At, dolorum!',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque error harum consectetur rem nisi quos.</p> <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt alias delectus enim quisquam pariatur ex voluptatum repudiandae quidem odio molestiae.</p>'
        // ]);

        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'title' => 'Judul Post Keempat',
        //     'slug' => 'judul-post-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, eos.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque error harum consectetur rem nisi quos.</p> <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt alias delectus enim quisquam pariatur ex voluptatum repudiandae quidem odio molestiae.</p>'
        // ]);

        User::factory(3)->create();

        // Seeder Category
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
    }
}
