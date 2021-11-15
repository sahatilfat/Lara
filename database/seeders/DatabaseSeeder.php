<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        // User::create([
        //     'name' => 'M Tafli Tahas',
        //     'email' => 'sahatilfat@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);
        // User::create([
        //     'name' => 'Bahari Lubis',
        //     'email' => 'bahari@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

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

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate, consectetur! Consectetur voluptas officia eveniet, laboriosam totam rem vitae ipsa facilis alias, architecto dolorum veniam. Nostrum quos dolorem accusantium eum incidunt et sequi numquam odio autem',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate, consectetur! Consectetur voluptas officia eveniet, laboriosam totam rem vitae ipsa facilis alias, architecto dolorum veniam. Nostrum quos dolorem accusantium eum incidunt et sequi numquam odio autem distinctio blanditiis in mollitia illum quaerat, unde omnis quod corrupti doloremque voluptatem fuga. Voluptatibus, ipsa enim. Dolorem pariatur, ratione ut nisi deserunt minus consequuntur. Accusamus laudantium a, quidem possimus tenetur, adipisci odio quos, facilis laborum quisquam vitae illum tempore dolorem corrupti praesentium aspernatur? Facere incidunt labore consequuntur, autem, eaque ipsa corrupti at ipsum, ut laboriosam deserunt inventore! Accusamus, voluptatem? Esse quos perferendis eum natus. Alias?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate, consectetur! Consectetur voluptas officia eveniet, laboriosam totam rem vitae ipsa facilis alias, architecto dolorum veniam. Nostrum quos dolorem accusantium eum incidunt et sequi numquam odio autem',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate, consectetur! Consectetur voluptas officia eveniet, laboriosam totam rem vitae ipsa facilis alias, architecto dolorum veniam. Nostrum quos dolorem accusantium eum incidunt et sequi numquam odio autem distinctio blanditiis in mollitia illum quaerat, unde omnis quod corrupti doloremque voluptatem fuga. Voluptatibus, ipsa enim. Dolorem pariatur, ratione ut nisi deserunt minus consequuntur. Accusamus laudantium a, quidem possimus tenetur, adipisci odio quos, facilis laborum quisquam vitae illum tempore dolorem corrupti praesentium aspernatur? Facere incidunt labore consequuntur, autem, eaque ipsa corrupti at ipsum, ut laboriosam deserunt inventore! Accusamus, voluptatem? Esse quos perferendis eum natus. Alias?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate, consectetur! Consectetur voluptas officia eveniet, laboriosam totam rem vitae ipsa facilis alias, architecto dolorum veniam. Nostrum quos dolorem accusantium eum incidunt et sequi numquam odio autem',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate, consectetur! Consectetur voluptas officia eveniet, laboriosam totam rem vitae ipsa facilis alias, architecto dolorum veniam. Nostrum quos dolorem accusantium eum incidunt et sequi numquam odio autem distinctio blanditiis in mollitia illum quaerat, unde omnis quod corrupti doloremque voluptatem fuga. Voluptatibus, ipsa enim. Dolorem pariatur, ratione ut nisi deserunt minus consequuntur. Accusamus laudantium a, quidem possimus tenetur, adipisci odio quos, facilis laborum quisquam vitae illum tempore dolorem corrupti praesentium aspernatur? Facere incidunt labore consequuntur, autem, eaque ipsa corrupti at ipsum, ut laboriosam deserunt inventore! Accusamus, voluptatem? Esse quos perferendis eum natus. Alias?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate, consectetur! Consectetur voluptas officia eveniet, laboriosam totam rem vitae ipsa facilis alias, architecto dolorum veniam. Nostrum quos dolorem accusantium eum incidunt et sequi numquam odio autem',
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate, consectetur! Consectetur voluptas officia eveniet, laboriosam totam rem vitae ipsa facilis alias, architecto dolorum veniam. Nostrum quos dolorem accusantium eum incidunt et sequi numquam odio autem distinctio blanditiis in mollitia illum quaerat, unde omnis quod corrupti doloremque voluptatem fuga. Voluptatibus, ipsa enim. Dolorem pariatur, ratione ut nisi deserunt minus consequuntur. Accusamus laudantium a, quidem possimus tenetur, adipisci odio quos, facilis laborum quisquam vitae illum tempore dolorem corrupti praesentium aspernatur? Facere incidunt labore consequuntur, autem, eaque ipsa corrupti at ipsum, ut laboriosam deserunt inventore! Accusamus, voluptatem? Esse quos perferendis eum natus. Alias?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
