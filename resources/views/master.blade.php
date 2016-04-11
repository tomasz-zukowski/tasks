<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
        @yield('title')
        </title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <script type="text/javascript" src="{{ asset('js/jquery-1.12.2.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
        @yield('header')
    </head>
    <body>
        @include('navigation')
        @yield('navigation')
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            @section('head')
                            @endsection
                            @yield('head')
                        </div>
                        <div class="panel-body">
                            @section('content')
                                <h4>Część treści</h4>
                            @endsection
                            @yield('content')
                        </div>
                        <div class="panel-footer">
                            @yield('foot')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>