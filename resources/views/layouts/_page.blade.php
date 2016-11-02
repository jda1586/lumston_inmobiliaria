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

{{--<div id="hero-container">


</div>--}}
<div class="home-header">
    <div class="home-logo osLight">
        <a href="{!! route('welcome.index') !!}">
            <span class="fa" style="color: white;">
                <img src="{!! asset('images/web/logo.svg') !!}" width="120px">
            </span>
        </a>
    </div>
    <a href="#" class="home-navHandler visible-xs"><span class="fa fa-bars"></span></a>
    <div class="home-nav">
        <ul>
            <li><a href="{!! route("properties.index") !!}">PROPIEDADES</a></li>
            <li><a href="{!! route("welcome.sale") !!}">OPCIONAR TU PROPIEDAD</a></li>
            <li><a href="{!! route("welcome.why") !!}">¿POR QUÉ NOSOTROS?</a></li>
            <li><a href="{!! route("welcome.contact") !!}">CONTACTO</a></li>
            <li style="padding-top: 9px;">
                <a href="#" data-toggle="modal" data-target="#signin">INGRESAR</a>
            </li>
            <li><a href="#" class="btn btn-blue" style="color: white !important;" data-toggle="modal"
                   data-target="#signup">REGISTRATE</a></li>
        </ul>
    </div>
</div>

<!-- Content -->
<div class="home-wrapper" style="margin-top: 84px;">
    <div class="home-content">
        @yield('content')
    </div>
</div>

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
                                @each('welcome.partials.miniBox',$properties,'property')
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
                                <span class="fa fa-phone"></span> (123) 456-7890
                            </li>
                            <li class="widget-address osLight">
                                <p>196 Front St</p>
                                <p>San Francisco, CA 94111</p>
                                <p>United States</p>
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

