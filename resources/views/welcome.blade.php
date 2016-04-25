@extends('app')

@section('page', 'Home')

@section('content')
    <div class="splash">
        <div class="title">Package, Manage, Spend</div>
        <div class="slogan">Freedom to manage your money</div>
        <a href="{{ env('URL_REGISTER') }}" class="btn btn-wide more">Sign Up</a> or <a href="/about"
                                                                                        class="btn btn-wide more">Find
            Out More</a>
    </div>
@endsection