<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
     public function index()
        {
            return view('posts', [
                "title" => "All Posts",
                "posts" => Post::with('category','author')->latest()->get()
            ]);
        }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }

    // Post::create([
    //     'title' => 'Judul Post Pertama',
    //     'slug' => 'judul-post-pertama',
    //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, reprehenderit.',
    //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates, reprehenderit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> <p>Minus inventore non minima? Animi mollitia eaque fugiat iure explicabo sint cum.</p>'
    // ])

    // Post::create([
    //     'title' => 'Judul Post Kedua',
    //     'slug' => 'judul-post-kedua',
    //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aperiam, nobis!',
    //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, fuga!</p> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, eligendi.</p>'
    // ])


    // Post::create([
    //     'title' => 'Judul Post Ketiga',
    //     'slug' => 'judul-post-ketiga',
    //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae, aperiam?',
    //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, fuga!</p> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, eligendi.</p>'
    // ])

    // Post::create([
    //     'title' => 'Judul Post Keempat',
    //     'slug' => 'judul-post-keempat',
    //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, illo?',
    //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, inventore.</p> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, eligendi.</p>'
    // ])

    // Post::create([
    //     'title' => 'Judul Post Kelima',
    //     'slug' => 'judul-post-kelima',
    //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, illo?',
    //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, inventore.</p> <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos, eligendi.</p>'
    // ])

}
