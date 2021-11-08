<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="{{url('/')}}"><img title="Louts Home" src="css/img/L.png" style="height:2rem; width:4rem;border-radius: 50%;" class="navbar-brand"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- Left Side Of Navbar -->
    <ul class="navbar-nav mr-auto">
      <a class="nav-item nav-link active" href="{{url('/')}}" title="Home page">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="{{url('/about')}}" title="Dicover our Books">Book</a>
        <a class="nav-item nav-link" href="{{url('/services')}}" title="Here some support Video">Video</a>
        @if(Auth::check() && Auth::user()->hasRole('Admin'))
         <a class="nav-item nav-link" href="{{url('/admin')}}" title="Can change the User parmitios">Admin</a>
        @endif
        @if(Auth::check() &&( Auth::user()->hasRole(['Admin','Editor']) ||Auth::user()->hasRole('Editor')))
        <a class="nav-item nav-link" href="{{url('/editor')}}" title="Change Settinds">Editor</a>
       @endif
    </ul>

    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  {{-- <a href="/dashboard" class="dropdown-item">Dashboard</a> --}}
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</div>
  </nav>
