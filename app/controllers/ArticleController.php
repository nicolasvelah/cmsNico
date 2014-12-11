<?php
use cmsNico\Entities\Article;

class ArticleController extends BaseController {

    public function article($catslug, $slug, $id)
    {
        $article = Article::where('id', '=', $id)->get();
        //dd($article);

        return View::make('article', compact('article', 'slug', 'catslug'));
    }
}