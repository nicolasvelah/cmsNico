<?php
use cmsNico\Entities\Category;
use cmsNico\Entities\Article;
use cmsNico\Entities\Comments;

class BlogController extends BaseController {

    public function categories()
    {
        $category = Category::all();
        return View::make('blog.categories', compact('category'));
    }

    public function article($catslug, $slug, $id)
    {
        $article = Article::where('id', '=', $id)->get();
        $comments = Comments::where('component_item_id', '=', $id)->get();
        //dd($comments);

        return View::make('blog.article', compact('article', 'comments', 'slug', 'catslug'));
    }
    public function category($slug, $id)
    {
        $category = Article::where('cat_id', '=', $id)->get();
        //dd($category);

        return View::make('blog.category', compact('category', 'slug'));
    }

}
