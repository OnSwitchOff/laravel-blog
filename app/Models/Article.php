<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function author(){
        return $this->belongsTo(Author::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class,'article_category');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class,'article_tag');
    }
}
