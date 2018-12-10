<?php

//My class with helpsers
namespace App\Helpers;
use App\Post;

class _Functions{

    public static function getLastComments()
    {
        $comments = \App\Comment::take(5)->get();
        return $comments;
    }

    public static function getPath($nid)
    {
        $post = Post::findOrFail($nid);
        $parent_cat = $post->ParentCat->slug;
        // $cat = $post->ParentCat->slug;
        $article = $post->slug;
        return  $post->slug ;
    }






}
