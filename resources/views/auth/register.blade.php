@extends('master')

@section('content')
    <form class="form-horizontal" role="form" method="POST" autocomplete="off" action="{{ url('/register') }}">
        {!! csrf_field() !!}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label">Login</label>

            <div class="col-md-6">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label">Adres e-mail</label>

            <div class="col-md-6">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

         <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label">Nazwisko</label>

            <div class="col-md-6">
                <input type="text" class="form-control" name="surname" value="{{ old('surname') }}">

                @if ($errors->has('surname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('surname') }}</strong>
                    </span>
                @endif
            </div>
         </div>

         <div class="form-group{{ $errors->has('forename') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label">Imię</label>

            <div class="col-md-6">
                <input type="text" class="form-control" name="forename" value="{{ old('forename') }}">

                @if ($errors->has('forename'))
                    <span class="help-block">
                        <strong>{{ $errors->first('forename') }}</strong>
                    </span>
                @endif
            </div>
         </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label">Hasło</label>

            <div class="col-md-6">
                <input type="password" class="form-control" name="password">

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label">Powtórz hasło</label>

            <div class="col-md-6">
                <input type="password" class="form-control" name="password_confirmation">

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-user"></i> Zarejestruj
                </button>
            </div>
        </div>
    </form>
@endsection
