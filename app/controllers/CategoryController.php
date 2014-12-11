<?php
use cmsNico\Entities\Article;

class CategoryController extends BaseController {

    public function category($slug, $id)
    {
        $category = Article::where('cat_id', '=', $id)->get();
        //dd($category);

        return View::make('category', compact('category', 'slug'));
    }
}
