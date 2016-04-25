<article>
    <header>
        <div class="subtitle">{{ $title }}</div>
        <time datetime="{{ $datetime }}">{{ $formatted_datetime }}</time>
    </header>

    {!! $html !!}

    <div class="read-more"><a href="{{ $link }}" class="btn btn-fifth">read more</a></div>
</article>