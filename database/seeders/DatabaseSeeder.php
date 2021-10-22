<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Raditya',
            'email' => 'raditya@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Gilang',
            'email' => 'gilang@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi temporibus sequi fugit. Necessitatibus dicta porro deleniti, quam consectetur laudantium possimus voluptatum earum totam enim laborum dolorem? Dicta aliquam, voluptatibus repellendus consequatur laboriosam soluta beatae nisi, odit exercitationem eaque adipisci quaerat nemo corrupti minima dolore nihil! Perferendis autem iusto nemo placeat eligendi veniam nostrum vel, esse hic provident libero dignissimos illum magni cum aliquid voluptatibus obcaecati laborum quod qui fugiat vitae est distinctio porro. Rerum ab totam ea facere praesentium numquam perspiciatis dignissimos quisquam odio cum aliquid, magni vitae maiores, porro ipsam magnam aperiam minus ex voluptatum eaque maxime mollitia. Recusandae.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi temporibus sequi fugit. Necessitatibus dicta porro deleniti, quam consectetur laudantium possimus voluptatum earum totam enim laborum dolorem? Dicta aliquam, voluptatibus repellendus consequatur laboriosam soluta beatae nisi, odit exercitationem eaque adipisci quaerat nemo corrupti minima dolore nihil! Perferendis autem iusto nemo placeat eligendi veniam nostrum vel, esse hic provident libero dignissimos illum magni cum aliquid voluptatibus obcaecati laborum quod qui fugiat vitae est distinctio porro. Rerum ab totam ea facere praesentium numquam perspiciatis dignissimos quisquam odio cum aliquid, magni vitae maiores, porro ipsam magnam aperiam minus ex voluptatum eaque maxime mollitia. Recusandae.',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi temporibus sequi fugit. Necessitatibus dicta porro deleniti, quam consectetur laudantium possimus voluptatum earum totam enim laborum dolorem? Dicta aliquam, voluptatibus repellendus consequatur laboriosam soluta beatae nisi, odit exercitationem eaque adipisci quaerat nemo corrupti minima dolore nihil! Perferendis autem iusto nemo placeat eligendi veniam nostrum vel, esse hic provident libero dignissimos illum magni cum aliquid voluptatibus obcaecati laborum quod qui fugiat vitae est distinctio porro. Rerum ab totam ea facere praesentium numquam perspiciatis dignissimos quisquam odio cum aliquid, magni vitae maiores, porro ipsam magnam aperiam minus ex voluptatum eaque maxime mollitia. Recusandae.',
            'category_id' => 2,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul keempat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi temporibus sequi fugit. Necessitatibus dicta porro deleniti, quam consectetur laudantium possimus voluptatum earum totam enim laborum dolorem? Dicta aliquam, voluptatibus repellendus consequatur laboriosam soluta beatae nisi, odit exercitationem eaque adipisci quaerat nemo corrupti minima dolore nihil! Perferendis autem iusto nemo placeat eligendi veniam nostrum vel, esse hic provident libero dignissimos illum magni cum aliquid voluptatibus obcaecati laborum quod qui fugiat vitae est distinctio porro. Rerum ab totam ea facere praesentium numquam perspiciatis dignissimos quisquam odio cum aliquid, magni vitae maiores, porro ipsam magnam aperiam minus ex voluptatum eaque maxime mollitia. Recusandae.',
            'category_id' => 2,
            'user_id' => 2
        ]);
        
    }
}
