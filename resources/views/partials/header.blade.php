<header>
    <nav class="navbar navbar-expand-md nav-style navbar-light" style="background-color: #FF7659;">
        <div class="ms-2">
            @auth
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <div class="logo_laravel">
                        <img src="{{ asset('img/deliveboo-white.png') }}" alt="" style="max-width: 200px">
                    </div>
                    {{-- config('app.name', 'Laravel') --}}
                </a>
            @endauth
        </div>
        <div class="container my-3">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    @auth
                        <li class="nav-item">
                            <a class=" nav-pills" href="{{ route('restaurants.index') }}">{{ __('Il tuo ristorante') }}</a>

                            <a class="nav-pills" href="{{ route('dishes.index') }}">{{ __('Piatti') }}</a>

                            <a class="nav-pills" href="{{ route('dishes.create') }}">{{ __('Crea') }}</a>

                            <a class="nav-pills" href="{{ route('orders.index') }}">{{ __('Ordini') }}</a>
                        </li>
                    @endauth
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class=" nav-pills" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class=" nav-pills" href="{{ route('register') }}">{{ __('Registrati') }}</a>
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
                                <a class="dropdown-item " href="{{ url('profile') }}">{{ __('Profilo') }}</a>
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
        {{-- config('app.name', 'Laravel') --}}
        </a>


    </nav>

    <style>
        a {
            color: currentColor;
            text-decoration: none;
        }

        .nav-pills {
            background-color: white;
            border-radius: 8px;
            margin: 10px;
            padding: 10px 30px;
            font-size: 15px;
            border: 1px solid #FE715E;
            color: #FE715E;
            width: 40%;
        }

        .nav-pills:hover {
            color: white;
            background-color: #D3574A;
            border: 1px solid white;
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
