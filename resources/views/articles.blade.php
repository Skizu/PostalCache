@extends('app')

@section('page', $title)

@section('content')
    <section>
        <header>
            <span class="title">{{ $title }}</span>

            <form method="POST" action="{{ route("$name.search") }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label for="search">Search</label>
                <input name="search" id="search" type="search" placeholder="Search by subject"
                       value="{{ $search or '' }}">
            </form>
        </header>
        <div class="boxes">
            @include('partials.articles')
        </div>
    </section>
@endsection