<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>O'Farrill RealEState | @yield('title')</title>

    @section('_header')
        <link href="{!! asset('css/jquery-ui.css') !!}" rel="stylesheet">
        <link href="{!! asset('css/font-awesome.css') !!}" rel="stylesheet">
        <link href="{!! asset('css/simple-line-icons.css') !!}" rel="stylesheet">
        <link href="{!! asset('css/fullscreen-slider.css') !!}" rel="stylesheet">
        <link href="{!! asset('css/bootstrap.css') !!}" rel="stylesheet">
        <link href="{!! asset('css/app.css') !!}" rel="stylesheet">
        @show

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body class="notransition no-hidden">

<!-- Hero -->

<div id="hero-container">
    <ul class="cb-slideshow">
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
    </ul>
    <div class="home-header">
        <div class="home-logo osLight">
            <span class="fa" style="color: white;">
                <img src="{!! asset('images/web/logo.svg') !!}" width="120px">
            </span>
        </div>
        <a href="#" class="home-navHandler visible-xs"><span class="fa fa-bars"></span></a>
        <div class="home-nav">
            <ul>
                <li><a href="{!! route("properties.index") !!}">PROPIEDADES</a></li>
                <li><a href="{!! route("welcome.sale") !!}">OPCIONAR TU PROPIEDAD</a></li>
                <li><a href="{!! route("welcome.why") !!}">¿POR QUÉ NOSOTROS?</a></li>
                <li><a href="{!! route("welcome.contact") !!}">CONTACTO</a></li>
                @if(auth()->check())
                    <li>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false" style="border: none !important;">
                                {{ strtoupper(auth()->user()->first_name) }} <span class="fa fa-angle-down"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li>
                                    <a href="{!! route('user.index') !!}">
                                        <span class="fa fa-user"></span>  Perfil
                                    </a>
                                </li>
                                <li>
                                    <a href="{!! route('properties.favorites') !!}">
                                        <span class="fa fa-heart"></span> Favoritos
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="{!! route('auth.logout') !!}">
                                        <span class="fa fa-power-off"></span>  Salir
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                @else
                    <li style="padding-top: 9px;">
                        <a href="#" data-toggle="modal" data-target="#signin">INGRESAR</a>
                    </li>
                    <li>
                        <a href="#" class="btn btn-blue" style="color: white !important;" data-toggle="modal"
                           data-target="#signup">REGISTRATE</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-lg-6 hidden-sm hidden-xs" style="margin-top: 150px;">
            <div class="home-caption">
                <div class="home-title">Nosotros te ayudamos a vender/rentar tu propiedad</div>
                <div class="home-subtitle">{{-- AQUI TEXTO SECUNDARIO --}}</div>
                <a href="{!! route('welcome.sale') !!}" class="btn btn-lg btn-black"> Más información </a>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12" style="margin-top: 150px;">
            {{--Buscador --}}
            <div class="home-search">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label><b>Ciudad</b></label>
                            <input type="text" class="form-control auto autoSearch" name="city" id="city"
                                   value="" placeholder="Ciudad" autocomplete="off">

                            @foreach($errors->get('city') as $error)
                                <span style="color: red; margin: 10px;">{{ $error }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 formItem">
                        <div class="formField">
                            <label><b>Inmuebles</b></label>
                            <a href="#" data-toggle="dropdown"
                               class="btn btn-gray dropdown-btn dropdown-toggle propTypeSelect">
                                <span class="dropdown-label">Todos</span>
                                <span class="fa fa-angle-down dsArrow"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-select full" role="menu">
                                <li class="active">
                                    <input type="radio" name="p_inmob" checked="checked" value="all">
                                    <a href="#">Todos</a>
                                </li>
                                <li><input type="radio" name="p_inmob" value="house"><a href="#">Casas</a></li>
                                <li><input type="radio" name="p_inmob" value="depto"><a href="#">Deptos.</a></li>
                                <li><input type="radio" name="p_inmob" value="ground"><a href="#">Terrenos</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 formItem">
                        <div class="formField">
                            <label><b>Tipos</b></label>
                            <a href="#" data-toggle="dropdown"
                               class="btn btn-gray dropdown-btn dropdown-toggle propTypeSelect">
                                <span class="dropdown-label">Todos</span>
                                <span class="fa fa-angle-down dsArrow"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-select full" role="menu">
                                <li class="active">
                                    <input type="radio" name="p_type" checked="checked" value="all">
                                    <a href="#">Todos</a>
                                </li>
                                <li><input type="radio" name="p_type" value="sale"><a href="#">Venta</a></li>
                                <li><input type="radio" name="p_type" value="rent"><a href="#">Renta</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 formItem">
                        <div class="formField">
                            <label><b>Precio</b></label>
                            <div class="slider priceSlider">
                                <div class="sliderTooltip">
                                    <div class="stArrow"></div>
                                    <div class="stLabel"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 formItem">

                        <div class="formField">
                            <label><b>Habitaciones</b></label>
                            <a href="#" data-toggle="dropdown"
                               class="btn btn-gray dropdown-btn dropdown-toggle propTypeSelect">
                                <span class="dropdown-label">Habitaciones</span>
                                <span class="fa fa-angle-down dsArrow"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-select full" role="menu">
                                <li class="active">
                                    <input type="radio" name="bedrooms" checked="checked" value="0">
                                    <a href="#">Habitaciones</a>
                                </li>
                                <li><input type="radio" name="bedrooms" value="1"><a href="#">1+</a></li>
                                <li><input type="radio" name="bedrooms" value="2"><a href="#">2+</a></li>
                                <li><input type="radio" name="bedrooms" value="3"><a href="#">3+</a></li>
                                <li><input type="radio" name="bedrooms" value="4"><a href="#">4+</a></li>
                                <li><input type="radio" name="bedrooms" value="5"><a href="#">5+</a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 formItem">

                        <div class="form-group">
                            <label for="search_neighborhood">Colonia / Sector</label>
                            <input type="text" class="form-control" name="neighborhood" id="search_neighborhood"
                                   value="" placeholder="Colonia / Delegacion" autocomplete="off">
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <div class="form-group">
                            <a href="#" class="btn btn-gray mb-10" id="search">
                                Buscar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<!-- Content -->
@yield('content')

<!-- Footer -->

<div class="home-footer">
    <div class="home-wrapper">
        <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <ul class="footer-nav pb20">
                    <li>
                        <div class="osLight footer-header">Propiedades</div>
                        <div>
                            <ul class="footer-nav pb20">
                                <li><a href="{!! route('properties.index') !!}">Propiedades</a></li>
                                <li><a href="#">Buscar por ciudad: Guadalajara</a></li>
                                <li><a href="#">Buscar por inmueble: Casa</a></li>
                                <li><a href="#">Buscar por tipo: VENTA</a></li>
                                <li><a href="#">Buscar por precio: menos de $1,000,000</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        {{--<div class="osLight footer-header">Agentes</div>
                        <div>
                            <ul class="footer-nav pb20">
                                <li>
                                    <a href="">Agent Page</a>
                                </li>
                            </ul>
                        </div>--}}
                    </li>
                </ul>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <ul class="footer-nav pb20">
                    <li id="recent_properties_widget-4" class="widget-container recent_properties_sidebar">
                        <div class="osLight footer-header">Lo mas nuevo</div>
                        <div>
                            <ul class="footer-nav pb20">
                                @each('welcome.partials.miniBox',$properties->slice(0, 3),'property')
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <ul class="footer-nav pb20">
                    {{--<li id="recent-posts-3" class="widget-container widget_recent_entries">
                        <div class="osLight footer-header">Desde nuestro Blog</div>
                        <ul class="footer-nav pb20">
                            <li>
                                <a href="#">Modern Two-Level Pool House in Los Angeles</a>
                            </li>
                            <li>
                                <a href="#">Private Contemporary Home Balancing Openness</a>
                            </li>
                            <li>
                                <a href="#">Stylish Modern Ranch Exuding a Welcoming Feel</a>
                            </li>
                            <li>
                                <a href="#">How Does A Designer Home Look Like</a>
                            </li>
                            <li>
                                <a href="#">Luminous 3 Bedroom Apartment Flaunting Modern Style</a>
                            </li>
                        </ul>
                    </li>--}}
                </ul>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <ul class="footer-nav pb20">
                    <li>
                        <div class="osLight footer-header">Contactanos</div>
                        <ul class="footer-nav pb20">
                            <li class="widget-phone">
                                <span class="fa fa-phone"></span> Cel: 33 3166 5792
                            </li>
                            <li class="widget-address osLight">
                                <p>Francisco Zarco #2392</p>
                                <p>Col. Ladron de Guevara</p>
                                <p>Guadalajara, Jal.</p>
                            </li>
                        </ul>
                    </li>
                    <li id="social_widget-2" class="widget-container social_sidebar">
                        <div class="osLight footer-header">Siguenos</div>
                        <ul class="footer-nav pb20">
                            <li>
                                <a href="#facebook" class="btn btn-sm btn-icon btn-round btn-o btn-white"
                                   target="_blank"><span class="fa fa-facebook"></span></a>
                                <a href="#twitter" class="btn btn-sm btn-icon btn-round btn-o btn-white"
                                   target="_blank"><span class="fa fa-twitter"></span></a>
                                <a href="#google" class="btn btn-sm btn-icon btn-round btn-o btn-white" target="_blank"><span
                                            class="fa fa-google-plus"></span></a>
                                <a href="#linkedin" class="btn btn-sm btn-icon btn-round btn-o btn-white"
                                   target="_blank"><span class="fa fa-linkedin"></span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
        <div class="copyright">© 2016 Lumston - O'Farrill RealEstate</div>
    </div>
</div>

@include('welcome.partials.modalLogin')

@include('welcome.partials.modalRegister')

<div class="icon_contact" style="background-image: url('{!! asset('images/web/contacto.png') !!}');"></div>
@section('_footer')
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery-ui-touch-punch.js"></script>
    <script src="js/jquery.placeholder.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.touchSwipe.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyA0pbui5wdR5fWMiaZ6CaGQ3p9Fv1R3nxs&sensor=true&amp;libraries=geometry&amp;libraries=places"
            type="text/javascript"></script>
    <script src="js/infobox.js"></script>
    <script src="js/jquery.visible.js"></script>
    <script src="js/home.js" type="text/javascript"></script>
@show
</body>
</html>

