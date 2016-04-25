@if(count($articles) > 0)
    @foreach($articles as $article)
        @include('partials.article-item', [
            'image' => str_replace('s72-c', "s$thumbnail_size-c", $article->get_enclosure()->get_thumbnail()),
            'title' => $article->get_title(),
            'datetime' => $article->get_date('Y-m-d h:i'),
            'formatted_datetime' => $article->get_date('D jS F Y'),
            'link' => route("$name.article", [substr(parse_url($article->get_permalink(), PHP_URL_PATH), 1)]),
            'html' => str_limit($str = strip_tags($article->get_description(), '<br><br/>'),
                (($len = strlen($str) < 400) ? $len : strpos($str, ' ', 400))
            )
        ])
@endforeach
@else
    <div class="alert alert-info" role="alert">We were not able to find any articles</div>
@endif