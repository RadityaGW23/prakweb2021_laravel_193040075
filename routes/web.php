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
        "tittle" => "Home"
    ]);
    // return 'Halaman Home';
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "name" => "Raditya Gilang Wicaksono",
        "image" => "doodoosonic-0t7PNNZlTC0-unsplash.jpg"
    ]);
    // return 'Halaman About';
});

Route::get('/blog', function () {
    $blog_posts = [
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
    
    return view('posts', [
        "tittle" => "Posts",
        "posts" => $blog_posts
    ]);
    // return 'Halaman Blog';
});

//halaman single post
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
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
    
    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "tittle" => "Single Post",
        "post" => $new_post
    ]);
});