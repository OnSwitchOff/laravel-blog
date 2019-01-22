<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public $timestamps = false;

    public function articles(){
        return $this->hasMany(Article::class);
    }
}