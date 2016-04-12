@section('navigation')
<nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="@if(Auth::guest()) {{ route('home') }} @else {{url("/home")}} @endif">Strona główna</a>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             @if (Auth::guest())
             {{Auth::user()}}
             <ul class="nav navbar-nav">
                <li><a href="{{ url('/login') }}">Zaloguj się</a></li>
                <li><a href="{{ url('/register') }}">Zarejestruj się</a></li>
            </ul>
            @else
            <ul class="nav navbar-nav">
                <li><a href="{{ route('categories') }}">Lista kategorii</a></li>
                <li><a href="{{ route('new_task') }}">Nowe zadanie</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Wyloguj</a></li>
                    </ul>
                </li>
            </ul>
            @endif
          </div>
        </div>
      </nav>
@endsection