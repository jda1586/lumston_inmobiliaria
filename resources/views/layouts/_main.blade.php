<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>O'Farrill RealState | @yield('title')</title>

    @section('_header')
        <link href="{!! asset('css/font-awesome.css') !!}" rel="stylesheet">
        <link href="{!! asset('css/simple-line-icons.css') !!}" rel="stylesheet">
        <link href="{!! asset('css/jquery-ui.css') !!}" rel="stylesheet">
        <link href="{!! asset('css/datepicker.css') !!}" rel="stylesheet">
        <link href="{!! asset('css/bootstrap.css') !!}" rel="stylesheet">
        <link href="{!! asset('css/app.css') !!}" rel="stylesheet">
        @show

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body class="notransition">

<!-- Header -->

<div id="header">
    <div class="logo">
        <a href="{!! route('welcome') !!}">
            <span class="fa fa-home marker"></span>
            <span class="logoText">
                <img src="{!! asset('images/web/logo.png') !!}">
            </span>
        </a>
    </div>
    <a href="#" class="navHandler"><span class="fa fa-bars"></span></a>
    <div class="search">
        <span class="searchIcon icon-magnifier"></span>
        <input type="text" placeholder="Busca casas, departamento, ....">
    </div>
    <div class="headerUserWraper">
        <a href="#" class="headerUser">
            <div class="userTop pull-left">
                <span class="headerUserName">Contacto</span>
            </div>
            <div class="clearfix"></div>
        </a>
    </div>
    <div class="headerUserWraper">
        <a href="{!! route('properties.index') !!}" class="headerUser">
            <div class="userTop pull-left">
                <span class="headerUserName">Propiedades</span>
            </div>
            <div class="clearfix"></div>
        </a>
    </div>

    <a href="#" class="mapHandler"><span class="icon-map"></span></a>
    <div class="clearfix"></div>
</div>

<!-- Left Side Navigation -->

<div id="leftSide">
    <nav class="leftNav scrollable">
        <div class="search">
            <span class="searchIcon icon-magnifier"></span>
            <input type="text" placeholder="Search for houses, apartments...">
            <div class="clearfix"></div>
        </div>
        <ul>
            <li><a href="explore.html"><span class="navIcon icon-compass"></span><span
                            class="navLabel">Explore</span></a></li>
            <li><a href="single.html"><span class="navIcon icon-home"></span><span class="navLabel">Single</span></a>
            </li>
            <li><a href="add.html"><span class="navIcon icon-plus"></span><span class="navLabel">New</span></a></li>
            <li class="hasSub">
                <a href="#"><span class="navIcon icon-drop"></span><span class="navLabel">Colors</span><span
                            class="fa fa-angle-left arrowRight"></span><span class="badge bg-yellow">5</span></a>
                <ul class="colors">
                    <li><a href="#">Red <span class="fa fa-circle-o c-red icon-right"></span></a></li>
                    <li><a href="#">Green <span class="fa fa-circle-o c-green icon-right"></span></a></li>
                    <li><a href="#">Blue <span class="fa fa-circle-o c-blue icon-right"></span></a></li>
                    <li><a href="#">Yellow <span class="fa fa-circle-o c-yellow icon-right"></span></a></li>
                    <li><a href="#">Magenta <span class="fa fa-circle-o c-magenta icon-right"></span></a></li>
                </ul>
            </li>
            <li class="hasSub">
                <a href="#"><span class="navIcon icon-layers"></span><span class="navLabel">Elements</span><span
                            class="fa fa-angle-left arrowRight"></span></a>
                <ul>
                    <li><a href="buttons.html">Buttons</a></li>
                    <li><a href="icons.html">Icons <span class="badge pull-right bg-yellow">841</span></a></li>
                    <li><a href="grid.html">Grid</a></li>
                    <li><a href="widgets.html">Widgets</a></li>
                    <li><a href="components.html">Components</a></li>
                    <li><a href="lists.html">Lists</a></li>
                    <li><a href="tables.html">Tables</a></li>
                    <li><a href="form.html">Form</a></li>
                </ul>
            </li>
            <li class="hasSub">
                <a href="#"><span class="navIcon icon-link"></span><span class="navLabel">Pages</span><span
                            class="fa fa-angle-left arrowRight"></span></a>
                <ul>
                    <li><a href="signin.html">Sign In</a></li>
                    <li><a href="signup.html">Sign Up</a></li>
                    <li><a href="profile.html">Profile</a></li>
                    <li><a href="index.html">Homepage Slideshow</a></li>
                    <li><a href="index-map.html">Homepage Map</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="blog-post.html">Blog Post</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="leftUserWraper dropup">
        <a href="#" class="avatarAction dropdown-toggle" data-toggle="dropdown">
            <img class="avatar" src="images/avatar-1.png" alt="avatar"><span class="counter">5</span>
            <div class="userBottom pull-left">
                <span class="bottomUserName">John Smith</span> <span class="fa fa-angle-up pull-right arrowUp"></span>
            </div>
            <div class="clearfix"></div>
        </a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#"><span class="icon-settings"></span>Settings</a></li>
            <li><a href="profile.html"><span class="icon-user"></span>Profile</a></li>
            <li><a href="#"><span class="icon-bell"></span>Notifications <span class="badge pull-right bg-red">5</span></a>
            </li>
            <li class="divider"></li>
            <li><a href="#"><span class="icon-power"></span>Logout</a></li>
        </ul>
    </div>
</div>
<div class="closeLeftSide"></div>

<!-- Content -->

<div id="wrapper">
    <div id="mapView">
        <div class="mapPlaceholder"><span class="fa fa-spin fa-spinner"></span> Loading map...</div>
    </div>
    <div id="content">
        @yield('content')
    </div>
    <div class="clearfix"></div>
</div>

@section('_footer')
    <script src="{!! asset('js/jquery-2.1.1.min.js') !!}"></script>
    <script src="{!! asset('js/jquery-ui.min.js') !!}"></script>
    <script src="{!! asset('js/jquery-ui-touch-punch.js') !!}"></script>
    <script src="{!! asset('js/jquery.placeholder.js') !!}"></script>
    <script src="{!! asset('js/bootstrap.js') !!}"></script>
    <script src="{!! asset('js/jquery.touchSwipe.min.js') !!}"></script>
    <script src="{!! asset('js/jquery.slimscroll.min.js') !!}"></script>
    <script src="http://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyA0pbui5wdR5fWMiaZ6CaGQ3p9Fv1R3nxs&sensor=true&amp;libraries=geometry&amp;libraries=places"
            type="text/javascript"></script>
    <script src="{!! asset('js/infobox.js') !!}"></script>
    <script src="{!! asset('js/jquery.tagsinput.min.js') !!}"></script>
    <script src="{!! asset('js/bootstrap-datepicker.js') !!}"></script>
    <script src="{!! asset('js/app.js" type="text/javascript') !!}"></script>
@show
</body>
</html>