<?php
// 202253084
namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul post pertama",
            "slug" => "Judul-post-pertama",
            "author" => "Aditya Maulana",
            "body" => "Lorem ipsum odor amet, consectetuer adipiscing elit. Feugiat vehicula condimentum ipsum gravida placerat montes. Erat libero pellentesque torquent dui lectus luctus pharetra. Fermentum nascetur maximus phasellus efficitur eget. Hendrerit ultrices faucibus vel conubia venenatis curabitur ullamcorper. Volutpat quis euismod nibh dui consequat sit convallis. Nec sed ex imperdiet mi quis ullamcorper turpis.",
        ],
        [
            "title" => "Judul post kedua",
            "slug" => "Judul-post-kedua",
            "author" => "Aditya Afrizal",
            "body" => "Lorem ipsum odor amet, consectetuer adipiscing elit. Feugiat vehicula condimentum ipsum gravida placerat montes. Erat libero pellentesque torquent dui lectus luctus pharetra. Fermentum nascetur maximus phasellus efficitur eget. Hendrerit ultrices faucibus vel conubia venenatis curabitur ullamcorper. Volutpat quis euismod nibh dui consequat sit convallis. Nec sed ex imperdiet mi quis ullamcorper turpis.",
        ]
    ];
    public static function all()
    {
        return collect (self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
    return collect($posts->firstWhere('slug',$slug));
    }
}