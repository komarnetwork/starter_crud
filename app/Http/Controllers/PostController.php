<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index()
    {
        $title = '';
        if (request('category')) {
            # code...
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            # code...
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts', [
            "title" => "All Posts" . $title,
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)
                ->withQueryString()
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

}
