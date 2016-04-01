<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::controller('blog', 'BlogController', [
    'getIndex' => 'blog.index',
    'getArticle' => 'blog.article',
    'postSearch' => 'blog.search',
    'getSearch' => 'blog.search.show'
]);
Route::controller('faqs', 'FaqsController', [
    'getIndex' => 'faqs.index',
    'getArticle' => 'faqs.article',
    'postSearch' => 'faqs.search',
    'getSearch' => 'faqs.search.show'
]);
Route::controller('articles', 'ArticleController', [
    'getIndex' => 'articles.index',
    'getArticle' => 'articles.article',
    'postSearch' => 'articles.search',
    'getSearch' => 'articles.search.show'
]);
Route::controller('/', 'GuestController');
