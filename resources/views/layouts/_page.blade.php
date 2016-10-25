<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>O'Farrill RealState | @yield('title')</title>

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
            <span class="fa" style="color: white;">
                <img src="{!! asset('images/web/logo_bco.svg') !!}" width="120px">
            </span>
    </div>
    <a href="#" class="home-navHandler visible-xs"><span class="fa fa-bars"></span></a>
    <div class="home-nav">
        <ul>
            <li><a href="{!! route("properties.index") !!}">Propiedades</a></li>
            <li><a href="{!! route("welcome.sale") !!}">Vender / Rentar</a></li>
            {{--<li><a href="#">Blog</a></li>--}}
            <li><a href="{!! route("welcome.contact") !!}">Contacto</a></li>
            <li style="padding-top: 9px;"><a href="#" data-toggle="modal" data-target="#signin">Ingresar</a>
            </li>
            <li><a href="#" class="btn btn-gray" data-toggle="modal" data-target="#signup">Registrate</a></li>
        </ul>
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
                                <li><a href="#">Properties List</a></li>
                                <li><a href="#">Single Property</a></li>
                                <li><a href="#">Search by City: San Francisco</a></li>
                                <li><a href="#">Search by Category: Apartment</a></li>
                                <li><a href="#">Search by Type: For Rent</a></li>
                                <li><a href="#">Search by Price: Less than $70,000</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="osLight footer-header">Agentes</div>
                        <div>
                            <ul class="footer-nav pb20">
                                <li>
                                    <a href="http://mariusn.com/themes/reales-wp/agents/jane-smith/">Agent Page</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <ul class="footer-nav pb20">
                    <li id="recent_properties_widget-4" class="widget-container recent_properties_sidebar">
                        <div class="osLight footer-header">Lo mas nuevo</div>
                        <div>
                            <ul class="footer-nav pb20">
                                <li>
                                    <a href="http://mariusn.com/themes/reales-wp/properties/modern-residence/">
                                        <div style="float: left; margin-right: 10px;">
                                            <img src="http://mariusn.com/themes/reales-wp/wp-content/uploads/2014/12/bg-1-120x120.jpg"
                                                 width="60" height="60">
                                        </div>
                                        <div>
                                            <div>Modern Residence</div>
                                            <div style="font-size: 11px; color: gray;">547 35th Ave, San Francisco,
                                                94121, United States
                                            </div>
                                            <div>$1,200,000 <span class="badge">For Sale</span></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://mariusn.com/themes/reales-wp/properties/sophisticated-residence/">
                                        <div style="float: left; margin-right: 10px;">
                                            <img src="http://mariusn.com/themes/reales-wp/wp-content/uploads/2015/02/img-prop-120x120.jpg"
                                                 width="60" height="60">
                                        </div>
                                        <div>
                                            <div>Sophisticated Residence</div>
                                            <div style="font-size: 11px; color: gray;">600 40th Ave, San Francisco,
                                                94121, United States
                                            </div>
                                            <div>$799,000 <span class="badge">For Sale</span></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://mariusn.com/themes/reales-wp/properties/luxury-mansion/">
                                        <div style="float: left; margin-right: 10px;">
                                            <img src="http://mariusn.com/themes/reales-wp/wp-content/uploads/2014/12/bg-5-1024x576-120x120.jpg"
                                                 width="60" height="60">
                                        </div>
                                        <div>
                                            <div>Luxury Mansion</div>
                                            <div style="font-size: 11px; color: gray;">10 Romain St, San Francisco,
                                                123456, Romania
                                            </div>
                                            <div>$3,400 /mo <span class="badge">For Rent</span></div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <ul class="footer-nav pb20">
                    <li id="recent-posts-3" class="widget-container widget_recent_entries">
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
                    </li>
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
        <div class="copyright">© 2015 Lumston - O'Farrill RealState</div>
    </div>
</div>

<div class="modal fade" id="signin" role="dialog" aria-labelledby="signinLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="signinLabel">Ingresar</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Contraseña" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="checkbox custom-checkbox"><label><input type="checkbox"><span
                                                class="fa fa-check"></span> Recordarme</label></div>
                            </div>
                            <div class="col-xs-6 align-right">
                                <p class="help-block"><a href="#" class="text-green">Olvidaste tu contraseña?</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="btn-group-justified">
                            <a href="#" class="btn btn-lg btn-green">Ingresar</a>
                        </div>
                    </div>
                    <p class="help-block">Aun no eres miembro? <a href="#" class="modal-su text-green">Registrate</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="signup" role="dialog" aria-labelledby="signupLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="signupLabel">Registrate</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <input type="text" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Apellido" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Contraseña" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Confirmar" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="btn-group-justified">
                            <a href="#" class="btn btn-lg btn-green">Crear cuenta</a>
                        </div>
                    </div>
                    <p class="help-block">Ya eres miembro? <a href="#" class="modal-si text-green">Ingresar</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

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

