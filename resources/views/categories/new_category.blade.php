<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        @include('navigation')
        @yield('navigation')
        <div class="container">
            <div class="content">
                <div class="title">Dodawanie nowego zadania</div>
            </div>
        </div>
    </body>
</html>
