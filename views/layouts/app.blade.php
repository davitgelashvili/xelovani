<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title>ხელოსანი არის ხელოვანი</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__logo">
                <a href="{{ url('/') }}">
                    XELOVANIA.GE 
                </a>
            </div>
            <!-- <ul class="navbar-nav ms-auto">
                @guest
                    {{-- @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif --}}
                @endguest
            </ul> -->
        </div>
    </header>

    @yield('content')
    
</body>
</html>
