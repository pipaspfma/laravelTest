<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ URL::asset('src/favicon.ico') }}">

    <title>Theme Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->

    <link href="{{ URL::asset('src/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Bootstrap theme -->
    <link href="{{ URL::asset('src/dist/css/bootstrap-theme.min.css') }}" rel="stylesheet" type="text/css">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ URL::asset('src/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('src/css/theme.css') }}" rel="stylesheet" type="text/css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script type="text/javascript" src="{{ URL::asset('src/js/ie8-responsive-file-warning.js') }}"></script><![endif]-->
    <script src="{{ URL::asset('src/js/ie-emulation-modes-warning.js') }}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>

<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Looking4Job</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                @if (Auth::guest())
                    <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="{{ url('/home') }}">Home</a></li>
                    <li class="{{ Request::is('search') ? 'active' : '' }}"><a href="{{ url('/search') }}">Search</a></li>
                    <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ url('/about') }}">About</a></li>
                @elseif(Auth::user()->typeUser == 0 || Auth::user()->isAdmin == 1)
                    <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="{{ url('/home') }}">Home</a></li>
                    <li class="{{ Request::is('favorite') ? 'active' : '' }}"><a href="{{ url('/favorite') }}">Favorite</a></li>
                    <li class="{{ Request::is('curriculum') ? 'active' : '' }}"><a href="{{ url('/curriculum') }}">Curriculum</a></li>
                    <li class="{{ Request::is('statistics') ? 'active' : '' }}"><a href="{{ url('/statistics') }}">Statistics</a></li>
                @elseif(Auth::user()->typeUser == 1 || Auth::user()->isAdmin == 1)
                    <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="{{ url('/home') }}">Home</a></li>
                    <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ url('/about') }}">About</a></li>
                    <li class="{{ Request::is('contacts') ? 'active' : '' }}"><a href="{{ url('/contacts') }}">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    @if(Auth::user()->typeUser == 0 || Auth::user()->isAdmin == 1)
                        <li role="presentation"><a href="#">Messages <span class="badge">3</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->firstName }} {{ Auth::user()->lastName }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                @if(Auth::user()->typeUser == 1 || Auth::user()->isAdmin == 1)
                                    <li><a href="{{ url('/jobOffer') }}"><i class="fa fa-briefcase" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Jobs Offers</a></li>
                                @endif
                                <li><a href="{{ url('/settings') }}"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Settings</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>&nbsp;&nbsp;&nbsp;Logout</a></li>
                            </ul>
                        </li>
                    @elseif(Auth::user()->typeUser == 1 || Auth::user()->isAdmin == 1)
                        <li role="presentation"><a href="#">Messages <span class="badge">3</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->firstName }} {{ Auth::user()->lastName }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                @if(Auth::user()->typeUser == 1 || Auth::user()->isAdmin == 1)
                                    <li><a href="{{ url('/jobOffer') }}"><i class="fa fa-briefcase" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Jobs Offers</a></li>
                                @endif
                                <li><a href="{{ url('/settings') }}"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Settings</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>&nbsp;&nbsp;&nbsp;Logout</a></li>
                            </ul>
                        </li>
                    @endif
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container theme-showcase" role="main">

@yield('content')

</div> <!-- /container -->


<footer class="footer-distributed">

    <div class="footer-left">

        <h3>Company<span>logo</span></h3>

        <p class="footer-links">
            <a href="#">Home</a>
            ·
            <a href="#">Blog</a>
            ·
            <a href="#">Pricing</a>
            ·
            <a href="#">About</a>
            ·
            <a href="#">Faq</a>
            ·
            <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">Looking4Job © 2016</p>
    </div>

    <div class="footer-center">

        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>Rua da Fonte - Chão de Couce</span> Leiria, Portugal</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>+351 912 281 867</p>
        </div>

        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:support@company.com">support@looking4job.com</a></p>
        </div>

    </div>

    <div class="footer-right">

        <p class="footer-company-about">
            <span>About the company</span>
            The mission of this company is ...
        </p>

        <div class="footer-icons">

            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>

        </div>

    </div>

</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="src/js/vendor/jquery.min.js"><\/script>')</script>
<script src="{{ URL::asset('src/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('src/js/docs.min.js') }}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{ URL::asset('src/js/ie10-viewport-bug-workaround.js') }}"></script>
</body>
</html>
