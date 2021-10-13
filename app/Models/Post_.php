<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [

        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Komarudin Islam",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque quos nam impedit itaque harum eligendi, aperiam
            labore sit fuga sed! Qui veniam eum aspernatur minima consequuntur voluptatem impedit facere iusto corporis id. Quis
            voluptate sunt omnis at ipsum libero molestiae, veritatis nostrum dolores? Reprehenderit ex repudiandae esse repellat,
            deserunt porro obcaecati in! Obcaecati expedita cupiditate asperiores, dolorum quaerat perferendis! Sequi, harum tenetur
            quod voluptas exercitationem architecto ullam eaque minima velit pariatur earum, nemo accusantium ipsum quisquam. Amet
            iure tempore illo."
        ],

        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy Ferdiansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde nesciunt ipsum nemo voluptate accusantium excepturi libero
            consequuntur ea asperiores eligendi maxime qui architecto quam reprehenderit repellat impedit, voluptates magni autem
            dignissimos! Cupiditate dolor ab maxime suscipit illum perferendis accusantium perspiciatis sunt mollitia quis dicta qui
            nulla vel quam necessitatibus natus, aspernatur impedit recusandae eum molestias eveniet molestiae. Sapiente excepturi
            corrupti maiores ducimus, perferendis fugit est quaerat nihil. Delectus voluptates earum impedit quasi. Repellat
            dignissimos maiores rerum vitae odit? Est ex quasi eveniet omnis excepturi totam inventore quia vero? Ducimus, nihil.
            "
        ],

    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

     public static function find($slug)
        {
            $posts = static::all();

            // $post = [];
            // foreach($posts as $p) {
            //     # code...
            //     if($p["slug"] === $slug) {
            //         # code...
            //         $post = $p;
            //     }
            // }

            return $posts->firstWhere('slug',$slug);

        }


}
