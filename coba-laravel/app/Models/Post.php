<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Hafadz Hazmirullah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, quia ratione nesciunt et ullam sit consectetur laudantium repellendus id mollitia culpa veniam ipsam tenetur ut, optio eaque consequatur, dolores minima eligendi totam dicta maiores porro delectus dolore? Pariatur accusamus mollitia corrupti! Fugit, placeat veritatis? Placeat aliquid inventore eos voluptates vero ut iusto et eveniet nobis eius quaerat omnis, non fugit iure atque maiores suscipit iste quasi itaque rerum id, earum veniam laboriosam commodi! Architecto neque rerum dolorum, id temporibus cum!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Asep Sutisna",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, alias provident quam amet mollitia assumenda reprehenderit sapiente tenetur modi soluta illo impedit explicabo, eum, beatae nisi maxime saepe dicta a. Ullam nobis, qui vel doloremque quas pariatur eum quod nisi itaque laborum doloribus necessitatibus, velit reprehenderit dolores explicabo quia. Obcaecati nisi tempore, impedit ut expedita cupiditate omnis earum cum aliquid doloribus placeat amet magnam nobis enim aliquam vel eius architecto non recusandae voluptatum. Amet laudantium non neque corrupti aut illo itaque at magni culpa, ullam ut necessitatibus veniam, odio, ducimus ea nisi voluptatibus vero a aliquam voluptatum blanditiis dolor fuga?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
