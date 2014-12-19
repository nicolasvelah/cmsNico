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

/*Home*/

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

/*Blog*/

Route::get('categories', ['as' => 'categories', 'uses' => 'BlogController@categories']);
Route::get('category/{slug}/{id}', ['as' => 'category', 'uses' => 'BlogController@category']);
Route::get('article/{catslug}/{slug}/{id}', ['as' => 'article', 'uses' => 'BlogController@article']);

/*Formularios*/
Route::get('contact', ['as' => 'contact', 'uses' => 'FormsController@contact']);

/*Send Mail*/
Route::post('sendemail', ['as' => 'sendemail', 'uses' => 'EmailController@send']);

/*Comment*/
Route::put('comment', ['as' => 'comment', 'uses' => 'CommentsController@save']);

/*login*/

Route::group(['before' => 'guest'], function () {
    Route::get('login', ['as' => 'login', 'uses' => 'LoginController@login']);
    Route::post('login', ['as' => 'login', 'uses' => 'LoginController@postIndex']);
});

Route::group(['before' => 'auth'], function () {
    Route::get('logout', ['as' => 'logout', 'uses' => 'LoginController@logout']);
});




/*Menús*/

Menu::make('MainMenu', function($menu){

    $menu->add('Home', array('route'  => 'home'));
    $menu->add('Categorias', array('route'  => 'categories'));
    $menu->add('Categoría', 'category/empresa/1');
    $menu->add('Artículo', 'article/empresa/florine-lind/4');
    $menu->add('Contacto', array('route'  => 'contact'));
    $menu->add('Login', array('route'  => 'login'));



});