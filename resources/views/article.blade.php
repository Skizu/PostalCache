@extends('app')

@section('page', $article->get_title())

@section('content')
    <article>
        <header>
            <div class="title">{{ $article->get_title() }}</div>
            <time datetime="{{ $article->get_date('Y-m-d h:i') }}"
                  class="display-block">{{ $article->get_date('D jS F Y') }}</time>
        </header>

        {!! $article->get_content() !!}

        @if($article->get_categories())
            <div>
                @foreach($article->get_categories() as $tag)
                    <a href="{{ route('articles.search', ['label:"'.$tag->get_term().'"']) }}">{{ $tag->get_term() }}</a>
                @endforeach
            </div>
        @endif
    </article>
@endsection