<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('public/css/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('public/css/main-style.css') }}" rel="stylesheet">
        <link href="{{ asset('public/css/account.css') }}" rel="stylesheet">
        <link href="{{ asset('public/css/theme.css') }}" rel="stylesheet">
        <link href="{{ asset('public/css/themify-icons.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>

    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-default navbar-static-top mb-0 custom-header">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                            &nbsp;
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                            @else
                            <li class="dropdown">
                                <a href="#" class="ppp dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
            @if (Auth::guest())
            <h1></h1>
            @else

            <div class="main-section-container customer-account">
                <div class="sidebar-section">
                    <div class="sidebar-account">
                        <div class="sidebar-inner">
                            <div class="sidebar-innerr list-group">
                                <a href="{{ url('admin/medical-products') }}" class="customer-my-profile active text-left"><h4>Medical Products</h4></a>
                            </div>
                            <div class="sidebar-innerr list-group">
                                <a href="{{ url('admin/medical-products') }}" class="customer-my-profile active text-left"><h4>Health Information</h4></a>
                            </div>
                            <div class="sidebar-innerr list-group">
                                <a href="{{ url('admin/health/category') }}" class="customer-my-profile active text-left"><h4>All Category</h4></a>
                            </div>
                            <div class="sidebar-innerr list-group">
                                <a href="{{ url('admin/health/posts') }}" class="customer-my-profile active text-left"><h4>All Post</h4></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @yield('content')
            </div>
        </div>
        <script src="{{ asset('public/js/app.js') }}"></script>

    </body>
</html>
