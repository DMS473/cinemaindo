<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
   static $blog_posts = [
        [
            "id" => 1,
            "title" => "Blog Post 1",
            "slug" => "blog-post-1",
            "author" => "Daffa",
            "content" => "Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eeiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eeiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur adipiscing elit, sed do eeiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eeiusmod tempor incididunt ut labore et dolore magna aliqua."


        ],
        [
            "id" => 2,
            "title" => "Blog Post 2",
            "slug" => "blog-post-2",
            "author" => "Muis",
            "content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do e
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do e
            eiusmod tempor incididunt ut labore et dolore magna aliqua."


            // konten ke tiga = <p>sum dolor sit amet,Lorem ipsum dolor sit amet, consectetur adipisci sum dolor sit</p><p>amet,Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eeiusmod tempor incididunt ut labore et dolore magna</p><p> aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eeiusmod tempor incididunt ut labore et dolore magna aliqua. consectetur adipiscing elit, sed do eeiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eeiusmod tempor incididunt ut labore et dolore magna aliqua.</p>"

        ]    

    ];

    public static function all()
        {
            return collect(self::$blog_posts);
        }
    
    public static function find($slug)
    {
            $posts = static::all();
            // return collect($posts)->where('slug', $slug)->first();
            return $posts->firstWhere('slug', $slug);
    
    }
}
