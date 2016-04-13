@extends('master')
@section('title','Lista użytkowników')

@section('content')
<div class="row">
    <div class="col-sm-8">
        {{--<h3>Kategoria <b>{{ $->name }}</b></h3>
        @if(!empty($category->description))
        <blockquote><i>{!! $category->description !!}</i></blockquote>
        @endif--}}
    </div>
</div>
    <h4>Lista zarejestrowanych użytkowników: </h4>
    <table class="table table-responsive table-hover">
        <thead>
            <tr>
                <th>Nazwisko i imię</th>
                <th>Nazwa użytkownika</th>
                <th>Adres e-mail</th>
                <th>Data rejestracji</th>
                <th>Data ostatniej modyfikacji</th>
                <th>Grupy</th>
            </tr>
        </thead>
        @if(count($users)!=0)
            @foreach($users as $user)
            <tr>
                <td><a href="{{ route('show_user_details', [$user->id]) }}">{{ $user->surname }} {{ $user->forename }}</a></td>
                <td>{{ $user ->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
                <td>
                @if(!empty($user->groups()))
                {{ $user->groups }}
                @else
                brak grupy
                @endif
                </td>
            </tr>
            @endforeach
        @else
            <h5>Brak zarejestrowanych użytkowników.</h5>
        @endif
    </table>
@endsection