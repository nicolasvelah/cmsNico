<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('categories', ['as' => 'categories', 'uses' => 'CategoriesController@categories']);
Route::get('category/{slug}/{id}', ['as' => 'category', 'uses' => 'CategoryController@category']);
Route::get('article/{catslug}/{slug}/{id}', ['as' => 'article', 'uses' => 'ArticleController@article']);
Route::controller('/login', 'LoginController');

Menu::make('MainMenu', function($menu){

    $menu->add('Home', array('route'  => 'home'));
    $menu->add('Categorias', array('route'  => 'categories'));

});