<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => " M Tafli Tahas",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora natus ipsam corporis eos sunt facere ipsa! Omnis enim aspernatur, dolore voluptas nobis dolorum alias dolores quidem reiciendis suscipit cumque distinctio labore dicta ipsum, harum asperiores optio voluptatem nam aperiam fugit sint. A commodi iure recusandae ullam porro eum quidem ab temporibus voluptatibus magni quibusdam rem in nulla mollitia doloribus, vero nisi praesentium officia, exercitationem perspiciatis itaque, earum voluptate facilis! Dolorem facilis ipsum natus sit fugiat assumenda optio esse. Et, perferendis?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => " Sahat Ilfat",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora natus ipsam corporis eos sunt facere ipsa! Omnis enim aspernatur, dolore voluptas nobis dolorum alias dolores quidem reiciendis suscipit cumque distinctio labore dicta ipsum, harum asperiores optio voluptatem nam aperiam fugit sint. A commodi iure recusandae ullam porro eum quidem ab temporibus voluptatibus magni quibusdam rem in nulla mollitia doloribus, vero nisi praesentium officia, exercitationem perspiciatis itaque, earum voluptate facilis! Dolorem facilis ipsum natus sit fugiat assumenda optio esse. Et, perferendis?"
        ],

    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
