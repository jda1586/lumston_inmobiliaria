<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>O'Farrill RealEstate | @yield('title')</title>

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
        <a href="{!! route('welcome.index') !!}">
            <img src="{!! asset('images/web/iso128x128_bco.png') !!}"/>
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
    @if(!auth()->check())
        <div class="headerUserWraper">
            <a href="#" class="" style="display: block; height: 60px; text-align: center; padding: 0 20px;"
               data-toggle="modal" data-target="#signup">
                <div class="userTop pull-left" style="margin: 10px 0 0 0 !important;">
                <span class="headerUserName btn btn-green">
                    Registrate
                </span>
                </div>
                <div class="clearfix"></div>
            </a>
        </div>
        <div class="headerUserWraper">
            <a href="#" class="headerUser" data-toggle="modal" data-target="#signin" id="btn_signin">
                <div class="userTop pull-left">
                <span class="headerUserName">
                    Ingresar
                </span>
                </div>
                <div class="clearfix"></div>
            </a>
        </div>
    @else
        <div class="headerUserWraper">
            <a href="#" class="userHandler dropdown-toggle" data-toggle="dropdown">
                <span class="icon-user"></span><span class="counter">5</span>
            </a>
            <a href="#" class="headerUser dropdown-toggle" data-toggle="dropdown">
                <img class="avatar headerAvatar pull-left" src="http://lorempixel.com/200/200/people/1" alt="avatar">
                <div class="userTop pull-left">
                    <span class="headerUserName">{{ auth()->user()->first_name }}</span>
                    <span class="fa fa-angle-down"></span>
                </div>
                <div class="clearfix"></div>
            </a>
            <div class="dropdown-menu pull-right userMenu" role="menu">
                <div class="mobAvatar">
                    <img class="avatar mobAvatarImg" src="http://lorempixel.com/200/200/people/" alt="avatar">
                    <div class="mobAvatarName">{{ auth()->user()->first_name }}</div>
                </div>
                <ul>
                    <li>
                        <a href="{!! route('user.index') !!}">
                            <span class="fa fa-user"></span>Perfil
                        </a>
                    </li>
                    <li><a href="#"><span class="fa fa-heart"></span>Favoritos</a></li>
                    <li>
                        <a href="#">
                            <span class="fa fa-bell"></span>Notificaciones
                            {{--<span class="badge pull-right bg-red">5</span>--}}
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="{!! route('auth.logout') !!}">
                            <span class="fa fa-power-off"></span>Salir
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    @endif
    <div class="headerUserWraper">
        <a href="{!! route("welcome.contact") !!}" class="headerUser">
            <div class="userTop pull-left">
                <span class="headerUserName">CONTACTO</span>
            </div>
            <div class="clearfix"></div>
        </a>
    </div>
    <div class="headerUserWraper">
        <a href="{!! route("welcome.why") !!}" class="headerUser">
            <div class="userTop pull-left">
                <span class="headerUserName">¿POR QUÉ NOSOTROS?</span>
            </div>
            <div class="clearfix"></div>
        </a>
    </div>
    <div class="headerUserWraper">
        <a href="{!! route("welcome.sale") !!}" class="headerUser">
            <div class="userTop pull-left">
                <span class="headerUserName">OPCIONAR TU PROPIEDAD</span>
            </div>
            <div class="clearfix"></div>
        </a>
    </div>
    <div class="headerUserWraper">
        <a href="{!! route('properties.index') !!}" class="headerUser">
            <div class="userTop pull-left">
                <span class="headerUserName">PROPIEDADES</span>
            </div>
            <div class="clearfix"></div>
        </a>
    </div>
    @if(auth()->check() && Guardian::check('properties.create'))
        <div class="headerUserWraper">
            <a href="{!! route('properties.create') !!}" class="headerUser">
                <div class="userTop pull-left">
                    <i class="fa fa-plus-circle text-green" aria-hidden="true"></i>
                    <span class="headerUserName">NUEVA PROPIEDAD</span>
                </div>
                <div class="clearfix"></div>
            </a>
        </div>
    @endif

    <a href="#" class="mapHandler"><span class="icon-map"></span></a>
    <div class="clearfix"></div>
</div>


<!-- Content -->
<div id="wrapper">
    @if(Session::has('alert'))
        <div style="background-color: {!! session('alert')['type'] == 'success'?'#5cb85c':'red' !!}; color: white; text-align: center; font-size: medium;">
            {{ session('alert')['msg'] }}
        </div>
    @endif
    <div id="mapView">
        <div class="mapPlaceholder"><span class="fa fa-spin fa-spinner"></span> Loading map...</div>
    </div>
    <div id="content">
        @yield('content')
    </div>
    <div class="clearfix"></div>
</div>
@if(!auth()->check())
    @include('welcome.partials.modalLogin')
    @include('welcome.partials.modalRegister')
@endif

<div class="icon_contact" style="background-image: url('{!! asset('images/web/contacto.png') !!}');"></div>
{{ csrf_field() }}
@section('_footer')
    <script>
        var _CsrfToken = "{!! csrf_token() !!}";
        var uid = {!! auth()->check() ? auth()->user()->id : 0 !!};
    </script>
    <script src="{!! asset('js/jquery-2.1.1.min.js') !!}"></script>
    <script src="{!! asset('js/jquery-ui.min.js') !!}"></script>
    <script src="{!! asset('js/jquery-ui-touch-punch.js') !!}"></script>
    <script src="{!! asset('js/jquery.placeholder.js') !!}"></script>
    <script src="{!! asset('js/bootstrap.js') !!}"></script>
    <script src="{!! asset('js/jquery.touchSwipe.min.js') !!}"></script>
    <script src="{!! asset('js/jquery.slimscroll.min.js') !!}"></script>
    <script src="http://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyA0pbui5wdR5fWMiaZ6CaGQ3p9Fv1R3nxs&libraries=geometry&libraries=places"
            type="text/javascript"></script>
    <script src="{!! asset('js/infobox.js') !!}"></script>
    <script src="{!! asset('js/jquery.tagsinput.min.js') !!}"></script>
    <script src="{!! asset('js/bootstrap-datepicker.js') !!}"></script>
    <script src="{!! asset('js/app.js" type="text/javascript') !!}"></script>
@show
</body>
</html>