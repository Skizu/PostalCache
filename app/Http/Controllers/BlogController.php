<?php namespace App\Http\Controllers;

class BlogController extends ArticleController
{
    public static $feed = 'ARTICLE_FEED';
    public static $view = 'articles';
    public static $name = 'blog';
    public static $title = 'Blog';
    public static $labels = ['blog'];
}