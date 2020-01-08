<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('public/css/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('public/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('public/css/main-style.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!--<script src="{{ asset('public/js/app.js') }}"></script>-->
        <script src="{{asset('public/vendor/jquery/dist/jquery.min.js')}}"></script>
<!--        <script src="https://localhost/erkclouds/public/vendor/jquery/dist/jquery.min.js"></script>-->
        <script src="//cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
        <script src="{{ asset('public/js/custom.js') }}" type="text/javascript"></script>
        <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
        

    </head>
    <body>
        <div id="app">
            <nav class="hidden navbar navbar-default navbar-static-top">
                <div class="container">
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
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
            </nav>
            @yield('content')
        </div>

        <script type="text/javascript">
            $(document).ready(function () {
                $('.expert-left-slider').slick({
                    slidesToScroll: 1,
                    slidesToShow: 1,
                    arrows: false,
                    infinite: true,
                    dots: true
                });
            });

            (function ($)
            {
                $(document).ready(function () {
                    $(".navbar-toggler").click(function () {
                        $(".navbar-nav.nav.nav-mobile").toggleClass("nav-mobile-open");
                    });
                    mainHeight();
                    function mainHeight() {
                        var wH = $(window).height();
                        var fH = $('.footer').outerHeight();
                        var hH = $('.header').outerHeight();
                        $('.site-content').css({'min-height': wH - (fH + hH)});
                    }
                    $(window).resize(function () {
                        mainHeight();
                    });
                    $(".navbar-toggler-icon i").click(function () {
                        $(this).parent().next().addClass('open');
                    });
                    var activeurl = window.location.href;
                    $(".category-wrap .leftnav ul li a").each(function () {
                        if ($(this).attr("href") == activeurl)
                            $(this).parents('li').addClass("active");
                    })

                });
            })(jQuery);
        </script>
        <script src="{{ asset('public/js/app.js') }}"></script>
        <script src="{{ asset('public/js/slick.min.js') }}" type="text/javascript"></script>
    </body>
</html>
