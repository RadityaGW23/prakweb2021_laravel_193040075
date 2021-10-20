<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "tittle" => "Judul Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Raditya",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum vero adipisci libero necessitatibus, eligendi cupiditate dolore suscipit at? Iste eaque fugit distinctio est tempore minus, placeat, modi omnis blanditiis totam dolor, incidunt expedita. Corrupti, debitis? Dolores ipsam repellendus assumenda quis ratione, voluptatem necessitatibus delectus fuga dolorem similique aut. Dicta provident similique, ut pariatur deserunt quasi nesciunt maxime modi magni neque enim quas nulla perspiciatis quam numquam autem quod cupiditate quae distinctio, et iste dolorum nihil ex tempore. Ab, tempore. Reiciendis."
        ],
        [
            "tittle" => "Judul Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Gilang Wicaksono",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi culpa reiciendis fuga. Quis molestias libero neque dolore veritatis voluptatum placeat dolores aliquam incidunt deleniti molestiae nihil, accusantium ex illo cupiditate assumenda labore totam delectus veniam eveniet excepturi atque aperiam voluptatibus? Neque, veniam laudantium nisi maxime accusamus odio cupiditate assumenda obcaecati temporibus eius expedita quae beatae esse et quo aut quisquam minima similique sequi aliquam optio aperiam asperiores vero facilis? Voluptate ipsam id voluptates unde vitae laudantium facere optio molestias laboriosam quibusdam fuga reprehenderit voluptatibus dolorum ullam, dolores repellendus quia. Odit?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
