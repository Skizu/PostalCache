<?php namespace App\Http\Controllers;

class FaqsController extends ArticleController
{
    public static $feed = 'ARTICLE_FEED';
    public static $view = 'articles';
    public static $name = 'faqs';
    public static $title = 'FAQs';
    public static $labels = ['faqs'];
}