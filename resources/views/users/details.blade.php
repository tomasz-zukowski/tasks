@extends('master')
@section('title','Szczegóły użytkownika')

@section('content')
    <h4>Widok szczegółowy użytkownika: </h4>
    <div class="row">
        <div class="col-sm-6">
            <table class="table table-responsive">
                <tr>
                    <td class="text-right">Nazwisko i imię</td>
                    <td><b>{{ $info->surname }} {{ $info->forename }}</b></td>
                </tr>
                <tr>
                    <td class="text-right">Login</td>
                    <td><b>{{ $info ->name }}</b></td>
                </tr>
                <tr>
                    <td class="text-right">Adres e-mail</td>
                    <td><b>{{ $info->email }}</b></td>
                </tr>
                <tr>
                    <td class="text-right">Data rejestracji</td>
                    <td><b>{{ $info->created_at }}</b></td>
                </tr>
                <tr>
                    <td class="text-right">Data ostatniej modyfikacji</td>
                    <td><b>{{ $info->updated_at }}</b></td>
                </tr>
                <tr>
                    <td class="text-right">Przynależność do grup</td>
                    <td>
                        <b>
                            @if(!empty($info->groups()))
                            {{ $info->groups }}
                            @else
                            brak grupy
                            @endif
                        </b>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-sm-6">

        </div>
    </div>
@endsection