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
        factory(Article::class, 1000)->create()->each(function ($article) {
            $faker=new Faker();
            $catCount=$faker->numberBetween(1,4);
            $tagCount=$faker->numberBetween(1,10);
            for ($i=0; $i <$catCount; $i++) {
                $catId=$faker->numberBetween(1,Category::count());
                $article->categories()->save(Category::where('id',$catId)->get()->make());
            }

            for ($i=0; $i <$tagCount; $i++) {
                $tagId=$faker->numberBetween(1,Tag::count());
                $article->tags()->save(Tag::where('id',$tagId)->get()->make());
            }
            
        });
    }
}
