<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('meta-title')</title>
    <meta name="description" content="A simple HTML5 Template for new projects.">
    <meta name="author" content="SitePoint">


    <link rel="icon" href="/favicon.ico">

    <link rel="stylesheet" href="/css/all.css">

</head>

<body>
    @include('templates.main.header')
    <div class="container">
        @if(Request::is('/'))
            @include('templates.main.inc.hero')
        @endif
        @include('templates.main.inc.mess')
        <div class="row">
            <div class="col-8">
                @yield('content')
            </div>
            <div class="col-4">
                @include('templates.main.inc.aside')
            </div>
        </div>
        @include('templates.main.footer')
    </div>
</body>
</html>
