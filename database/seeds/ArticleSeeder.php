<?php
use App\Article;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // $articles = config('articles');

        // foreach ($articles as $article) {
        //     $newArticle = new Article();
        //     $newArticle -> title = $article['title'];
        //     $newArticle -> body = $article['body'];
        //     $newArticle -> save();

        // }


        // FAKER
        for ($i=0; $i < 20; $i++) { 
            $newArticle = new Article();
            $newArticle -> title = $faker-> realText($maxNbChars = 10);
            $newArticle -> body = $faker-> realText($maxNbChars = 20);
            $newArticle -> save();
        }
    }
}
