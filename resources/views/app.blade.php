<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('page') | PostalCache</title>

    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-48x48.png" sizes="48x48">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">

    <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet" type="text/css">

    @if(env('GOOGLE_TRACKING_CODE'))<script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-1234567-8', 'auto');
        ga('require', 'linkid');
        ga('send', 'pageview');
    </script>@endif
</head>
<body>
<div class="container-fixed">
    <header role="banner">
        <div class="containerCentered">
            <a href="/" class="img-logo">PostalCache</a>

            <nav class="main-menu" id="main-nav" role="navigation">
                <ul>
                    <li>
                        <a href="/about">About Us</a>
                    </li>
                    <li>
                        <a href="/promise">Our Promise</a>
                    </li>
                </ul>
            </nav>
            <div class="header-buttons">
                <a href="{{ env('URL_LOGIN') }}" class="btn">Log In</a>
                <a href="{{ env('URL_REGISTER') }}" class="btn">Sign Up</a>
            </div>
        </div>
    </header>
</div>
<main class="@yield('page')">
    <div class="container">
        <div class="content">
            @yield('content')
        </div>
    </div>
</main>
</body>
</html>