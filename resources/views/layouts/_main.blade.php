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
            <img src="{!! asset('images/web/iso128x128_bco.png') !!}" />
        </a>
        {{--<a href="{!! route('welcome') !!}">
            <span class="fa fa-home marker"></span>
            <span class="logoText">
                <img src="{!! asset('images/web/isotipo_white.png') !!}" />
            </span>
        </a>--}}
    </div>

    {{--<a href="#" class="navHandler"><span class="fa fa-bars"></span></a>--}}
    {{--<div class="search">
        <span class="searchIcon icon-magnifier"></span>
        <input type="text" placeholder="Busca casas o departamento">
    </div>--}}
    <div class="headerUserWraper">
        <a href="#" class="" style="display: block; height: 60px; text-align: center; padding: 0 20px;">
            <div class="userTop pull-left" style="margin: 10px 0 0 0 !important;">
                <span class="headerUserName btn btn-green">
                    Registrate
                </span>
            </div>
            <div class="clearfix"></div>
        </a>
    </div>
    <div class="headerUserWraper">
        <a href="#" class="headerUser">
            <div class="userTop pull-left">
                <span class="headerUserName">
                    Ingresar
                </span>
            </div>
            <div class="clearfix"></div>
        </a>
    </div>
    <div class="headerUserWraper">
        <a href="#" class="headerUser">
            <div class="userTop pull-left">
                <span class="headerUserName">Contacto</span>
            </div>
            <div class="clearfix"></div>
        </a>
    </div>
    {{--<div class="headerUserWraper">
        <a href="#" class="headerUser">
            <div class="userTop pull-left">
                <span class="headerUserName">Blog</span>
            </div>
            <div class="clearfix"></div>
        </a>
    </div>--}}
    <div class="headerUserWraper">
        <a href="#" class="headerUser">
            <div class="userTop pull-left">
                <span class="headerUserName">Vender / Rentar</span>
            </div>
            <div class="clearfix"></div>
        </a>
    </div>
    {{--<div class="headerUserWraper">
        <a href="{!! route('properties.index') !!}" class="headerUser">
            <div class="userTop pull-left">
                <span class="headerUserName">Propiedades</span>
            </div>
            <div class="clearfix"></div>
        </a>
    </div>--}}

    <a href="#" class="mapHandler"><span class="icon-map"></span></a>
    <div class="clearfix"></div>
</div>



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