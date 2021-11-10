<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});
Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'M Tafli Tahas',
        'email' => 'sahatilfat@gmail.com',
        'image' => 'image.png'
    ]);
});




Route::get('/blog', function () {
    $blog_posts = [
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
    return view('posts', [
        'title' => 'Posts',
        'posts' => $blog_posts,
    ]);
});

// halaman single post
Route::get('posts/{slug}', function ($slug) {

    $blog_posts = [
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

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post['slug'] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        'title' => "Single Post",
        'post' => $new_post,
    ]);
});
