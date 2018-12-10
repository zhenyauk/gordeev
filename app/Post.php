<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class Post extends Model
{

    use Searchable;

    public function searchableAs()
    {
        return 'posts_index';
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Изменение массива...

        return $array;
    }

    public function ParentCat()
    {
        return $this->belongsTo('App\Categorie', 'category_id', 'id');
    }



    public function addView(int $amount = 1)
    {
        $this->timestamps = false;
        $this->views += $amount;
        $this->update();
        $this->timestamps = true;
        return $this;
    }

    public function prev(){
        return $this->belongsTo('App\Post', 'prev_post', 'id');
    }

    public function next(){
        return $this->belongsTo('App\Post', 'next_post', 'id');
    }

    public function lastPost(){
        return $this->hasMany('App\Post','post_id')->latest('created_at')->limit(3)->get();
    }
}
