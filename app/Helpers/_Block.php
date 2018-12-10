<?php

namespace App\Helpers;

use App\Blog;
use App\Blok;
use App\Post;
use Illuminate\Support\Facades\Lang;

class _Block{

    public static function get($title, $lang)
    {
        $block = Blok::where('title', $title)->first();
        $field = 'body_' . $lang;
        if ( isset($block->$field) ) return $block->$field;
        return null;
    }

    public static function getLastPosts($lang)
    {
        $posts = Post::where('lang', $lang)->take(5)->get();
        return $posts;
    }

}