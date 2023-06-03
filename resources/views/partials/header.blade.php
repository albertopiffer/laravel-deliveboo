<nav class="navbar navbar-expand-md nav-style navbar-light" style="background-color: #FF7659;">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <div class="logo_laravel">
                <img src="{{ asset('img/deliveboo-white.png') }}" alt="" style="max-width: 200px">
            </div>
            {{-- config('app.name', 'Laravel') --}}
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                @auth
                    <li class="nav-item">
                        <a class=" header-button" href="{{ route('restaurants.index') }}">{{ __('Il tuo ristorante') }}</a>

                        <a class="header-button" href="{{ route('dishes.index') }}">{{ __('Dishes') }}</a>

                        <a class="header-button" href="{{ route('dishes.create') }}">{{ __('Create') }}</a>

                        <a class="header-button" href="{{ route('orders.index') }}">{{ __('Orders') }}</a>
                    </li>
                @endauth
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class=" header-button" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class=" header-button" href="{{ route('register') }}">{{ __('Registrati') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            {{-- <a class="dropdown-item " href="{{ url('dashboard') }}">{{ __('Dashboard') }}</a> --}}
                            <a class="dropdown-item " href="{{ url('profile') }}">{{ __('Profile') }}</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<style>
    a {
        color: currentColor;
        text-decoration: none;
    }

    .header-button {
        border-radius: 999px;
        border: 1px solid #FF7659;
        color: #FF7659;
        background-color: white;
        padding: 5px;
        width: 40%;

        &:hover {
            color: white;
            background-color: #FF7659;
            border: 1px solid white;

            .icon {
                color: white
            }
        }
    }


    .nav-pills {
        background-color: white;
        border-radius: 999px;
        margin: 10px;
        padding: 13px 35px;
        font-size: 15px;
        color: grey;


    }

    .nav-pills:hover {
        background-color: white;
        opacity: 0.9;
    }

    @media (max-width: 770px) {
        .nav-pills {
            background-color: transparent;
            padding: 0;
            color: black;


        }

        .nav-pills:hover {
            background-color: transparent;

        }
    }
</style>
