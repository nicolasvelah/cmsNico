<?php
use cmsNico\Entities\Category;

class CategoriesController extends BaseController {

    public function categories()
    {
        $category = Category::all();
        return View::make('categories', compact('category'));
    }

}
