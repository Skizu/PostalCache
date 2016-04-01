<article>
    <header>
        <div class="subtitle">{{ $title }}</div>
        <time datetime="{{ $datetime }}">{{ $formatted_datetime }}</time>
    </header>

    {!! $html !!}

    @if($tags)
        <div class="display-inline-block tags">
            @foreach($tags as $tag)
                <a href="{{ route('articles.search', ['label:"'.$tag->get_term().'"']) }}"
                   class="label label-info">{{ $tag->get_term() }}</a>
            @endforeach
        </div>
    @endif
    <a href="{{ $link }}" class="btn btn-fifth">read more</a>
</article>