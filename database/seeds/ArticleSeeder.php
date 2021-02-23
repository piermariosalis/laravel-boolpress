<?php
use App\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = config('articles');

        foreach ($articles as $article) {
            $newArticle = new Article();
            $newArticle -> title = $article['title'];
            $newArticle -> body = $article['body'];
            $newArticle -> save();

        }
    }
}
