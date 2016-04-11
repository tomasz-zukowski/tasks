@section('navigation')
<nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="{{ route('home') }}">Strona główna</a>
          </div>

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('categories') }}">Lista kategorii</a></li>
                <li><a href="{{ route('new_task') }}">Nowe zadanie</a></li>
            </ul>
          </div>
        </div>
      </nav>
@endsection