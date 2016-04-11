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
            <div class="row">
                <div class="col-sm-12">
                    <div class="well">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4>Lista kategorii</h4>
                                <div class="row">
                                    <div class="col-sm-12 text-right">
                                        <a class="btn btn-primary btn-xs" href="{{ route('new_category') }}">Nowa kategoria +</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-responsive table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Nazwa kategorii</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($categories as $category)
                                            <tr>
                                                <td>
                                                    <a href="{{ route('tasks_from_category',[$category->id]) }}">{{ $category->name }}</a>
                                                </td>
                                                <td class="text-right">
                                                    <a class="btn btn-xs btn-warning glyphicon-pencil" href="{{ route('edit_category',$category->id) }}">Edit</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>