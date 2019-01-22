<?php

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Tag;
use App\Models\Category;
use Faker\Generator as Faker;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        factory(Article::class, 200)->create()->each(function ($article) {
            $faker=new Faker();
            $article->categories()->save(factory(Category::class,3)->make());
            $article->tags()->save(factory(Tag::class,5)->make());
        });
    }
}