<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Blog;

class Comment extends Model
{
    protected $table = 'comments';

    public function getArticle()
    {
        return $this->belongsTo('App\Categorie', 'article_id', 'id');
    }

    public function getUser(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }


}
