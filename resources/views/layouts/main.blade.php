<!doctype html>

<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <script src="{{ mix("js/manifest.js") }}"></script>
        <script src="{{ mix("js/vendor.js") }}"></script>

        <title>@yield('title', 'Test')</title>
    </head>

    <body>
        <main role="main" class="container mt-5">
            @yield('content')
        </main>
    </body>
</html>
