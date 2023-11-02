<!DOCTYPE html>
<html
        lang="en"
        class="scroll-smooth"
>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="FcP5XSWeK2YHHMatXtuM7-E-9J8XxZDtCKMtvjz00wM"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta')
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    <link rel="canonical" href='{{ url()->current() }}'>
    <script defer type="text/javascript" src="https://api.pirsch.io/pirsch-extended.js"
    id="pirschextendedjs"
    data-code="kobPzZYB9N6kgw8LP3bWWu9SSNoeMMRH"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>

<div class="">
    @yield('content')
</div>

</body>
</html>
