<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Feeds;
use Illuminate\Support\Facades\Request;

class ArticleController extends Controller
{
    /**
     * Article feed url
     * @property string feed
     */
    private static $feed = 'ARTICLE_FEED';
    /**
     * Route name
     * @var string $name
     */
    private static $name = 'articles';
    /**
     * View prefix
     * @property string $view
     */
    private static $view = 'articles';
    private static $title = 'articles';
    private static $labels = [];
    protected $query = ['q' => ''];

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {
        $feed = $this->feed();

        return view(static::$view, [
            'name' => static::$name,
            'title' => static::$title,
            'articles' => $feed->get_items(),
            'thumbnail_size' => env('FEED_THUMBNAIL_SIZE', 200)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param $year
     * @param $month
     * @param $title
     * @return Response
     */
    public function getArticle($year, $month, $title)
    {
        $article = $this->article("/$year/$month/$title");

        return view('article', [
            'name' => static::$name,
            'title' => static::$title,
            'article' => $article
        ]);
    }

    public function getSearch($search = false)
    {
        $feed = $this->feed($search);

        return view('articles', [
            'name' => static::$name,
            'title' => static::$title,
            'articles' => $feed->get_items(),
            'thumbnail_size' => env('FEED_THUMBNAIL_SIZE', 200),
            'search' => $search
        ]);
    }

    public function postSearch()
    {
        $search = Request::input('search');
        if ($search == '') {
            return redirect(route(static::$name . '.index'));
        }

        return redirect(route(static::$name . '.search.show', [$search]));
    }

    protected function feed($search = '')
    {
        $this->query['q'] .= $search;

        return $this->_getFeed();
    }

    protected function article($path)
    {
        $this->query['path'] = $path;
        $feed = $this->_getFeed();

        return $feed->get_item();
    }

    protected function _getFeed()
    {
        if (count(static::$labels) > 0) {
            $labels = join('|label:', static::$labels);
            $this->query['q'] .= " label:$labels";
        }

        return Feeds::make(env(static::$feed) . '?' . http_build_query($this->query));
    }
}
