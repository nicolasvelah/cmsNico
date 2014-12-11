<?php
use cmsNico\Entities\Category;

class HomeController extends BaseController {

    public function index()
    {
        $category = Category::all();
        return View::make('home', compact('category'));
    }

}
