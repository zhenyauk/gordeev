<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Categorie extends Model
{
    public function getChilds()
    {
        return $this->hasMany('App\Categorie', 'parent_id', 'id');

    }

    public function getParent()
    {
        return $this->belongsTo('App\Categorie', 'parent_id', 'id');
    }

    public function scopeParent()
    {

    }

    public function getBlogs(){
        return $this->hasMany('App\Post', 'category_id', 'id');
    }



}
