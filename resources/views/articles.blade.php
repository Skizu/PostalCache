@extends('app')

@section('page', $title)

@section('content')
    <section>
        <header>
            <span class="title">{{ $title }}</span>

            <form method="POST" action="{{ route("$name.search") }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="text" name="search" id="search" placeholder="Search by keywords" value="{{ $search or '' }}">
            </form>
        </header>
        <div class="boxes">
            @include('partials.articles')
        </div>
    </section>
@endsection