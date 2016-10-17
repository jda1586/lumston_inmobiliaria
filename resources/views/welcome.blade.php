<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>O'Farrill RealState | @yield('title')</title>

    <link href="{!! asset('css/jquery-ui.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/font-awesome.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/simple-line-icons.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/fullscreen-slider.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/bootstrap.css') !!}" rel="stylesheet">
    <link href="{!! asset('css/app.css') !!}" rel="stylesheet">

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
            <span class="fa">
                <img src="{!! asset('images/web/logo_white.png') !!}">
            </span>
        </div>
        <a href="#" class="home-navHandler visible-xs"><span class="fa fa-bars"></span></a>
        <div class="home-nav">
            <ul>
                {{--<li><a href="{!! route("properties.index") !!}">Propiedades</a></li>--}}
                <li><a href="#">Vender / Rentar</a></li>
                {{--<li><a href="#">Blog</a></li>--}}
                <li><a href="#">Contacto</a></li>
                <li style="padding-top: 9px;"><a href="#" data-toggle="modal" data-target="#signin">Ingresar</a></li>
                <li><a href="#" class="btn btn-green" data-toggle="modal" data-target="#signup">Registrate</a></li>
            </ul>
        </div>
    </div>
    <div class="home-caption">
        <div class="home-title">Ahora es mas facil encontrar tu nueva casa</div>
        <div class="home-subtitle">---</div>
        <a href="#" class="btn btn-lg btn-black">Leer más</a>
    </div>

    {{--Buscador --}}
    <div class="home-search">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-group">
                    <label><b>Ciudad</b></label>
                    <input type="text" class="form-control auto" name="city" id="city"
                           value="Guadalajara" placeholder="Ciudad" autocomplete="off">
                </div>
            </div>
        </div>
        <div class="row">
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
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 formItem">
                <div class="formField">
                    <label><b>Inmuebles</b></label>
                    <a href="#" data-toggle="dropdown"
                       class="btn btn-gray dropdown-btn dropdown-toggle propTypeSelect">
                        <span class="dropdown-label">Todos</span>
                        <span class="fa fa-angle-down dsArrow"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-select full" role="menu">
                        <li class="active"><input type="radio" name="pType" checked="checked"><a href="#">Todos</a>
                        </li>
                        <li><input type="radio" name="pType"><a href="#">Casas</a></li>
                        <li><input type="radio" name="pType"><a href="#">Deptos.</a></li>
                        <li><input type="radio" name="pType"><a href="#">Terrenos</a></li>
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
                        <li class="active"><input type="radio" name="pType" checked="checked"><a href="#">Todos</a>
                        </li>
                        <li><input type="radio" name="pType"><a href="#">Venta</a></li>
                        <li><input type="radio" name="pType"><a href="#">Renta</a></li>
                    </ul>
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
                        <li class="active"><input type="radio" name="pType" checked="checked">
                            <a href="#">Habitaciones</a>
                        </li>
                        <li><input type="radio" name="pType"><a href="#">1+</a></li>
                        <li><input type="radio" name="pType"><a href="#">2+</a></li>
                        <li><input type="radio" name="pType"><a href="#">3+</a></li>
                        <li><input type="radio" name="pType"><a href="#">4+</a></li>
                        <li><input type="radio" name="pType"><a href="#">5+</a></li>
                    </ul>
                </div>

            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 formItem">

                <div class="formField">
                    <label><b>Baños</b></label>
                    <a href="#" data-toggle="dropdown"
                       class="btn btn-gray dropdown-btn dropdown-toggle propTypeSelect">
                        <span class="dropdown-label">Baños</span>
                        <span class="fa fa-angle-down dsArrow"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-select full" role="menu">
                        <li class="active"><input type="radio" name="pType" checked="checked"><a
                                    href="#">Baños</a></li>
                        <li><input type="radio" name="pType"><a href="#">1+</a></li>
                        <li><input type="radio" name="pType"><a href="#">2+</a></li>
                        <li><input type="radio" name="pType"><a href="#">3+</a></li>
                        <li><input type="radio" name="pType"><a href="#">4+</a></li>
                        <li><input type="radio" name="pType"><a href="#">5+</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <div class="form-group">
                    <a href="javascript:void(0);" class="btn btn-green mb-10" id="filterPropertySubmit">
                        Buscar
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="highlight">
    <div class="h-title osLight">Encuentra ese nuevo lugar con nosotros</div>
    <div class="h-text osLight">Fusce risus metus, placerat in consectetur eu, porttitor a est sed sed dolor lorem cras
        adipiscing
    </div>
</div>

<!-- Content -->

<div class="home-wrapper">
    <div class="home-content">
        <h2 class="osLight">Conocenos</h2>
        <div class="row pb40">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 s-menu-item">
                <a href="#">
                    <span class="icon-pointer s-icon"></span>
                    <div class="s-content">
                        <h2 class="s-main osLight">Encuentra lugares en todo el país</h2>
                        <h3 class="s-sub osLight">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 s-menu-item">
                <a href="#">
                    <span class="icon-users s-icon"></span>
                    <div class="s-content">
                        <h2 class="s-main osLight">Tenemos agentes con experiencia</h2>
                        <h3 class="s-sub osLight">Nulla convallis egestas rhoncus consectetur adipiscing elit</h3>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 s-menu-item">
                <a href="#">
                    <span class="icon-home s-icon"></span>
                    <div class="s-content">
                        <h2 class="s-main osLight">Compra o renta hermosas propiedades</h2>
                        <h3 class="s-sub osLight">Donec facilisis fermentum sem, ac viverra ante luctus vel</h3>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 s-menu-item">
                <a href="#">
                    <span class="icon-cloud-upload s-icon"></span>
                    <div class="s-content">
                        <h2 class="s-main osLight">---</h2>
                        <h3 class="s-sub osLight">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                    </div>
                </a>
            </div>
        </div>
        <h2 class="osLight">Lo mas nuevo</h2>
        <div class="row pb40">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <a href="single.html" class="propWidget-2">
                    <div class="fig">
                        <img src="images/prop/1-1.png" alt="Modern Residence in New York">
                        <img class="blur" src="images/prop/1-1.png" alt="Modern Residence in New York">
                        <div class="opac"></div>
                        <div class="priceCap osLight"><span>$1,750,000</span></div>
                        <div class="figType">VENTA</div>
                        <h3 class="osLight">Modern Residence in New York</h3>
                        <div class="address">39 Remsen St, Brooklyn, NY 11201, USA</div>
                        <ul class="rating">
                            <li><span class="fa fa-star star-1"></span></li>
                            <li><span class="fa fa-star star-2"></span></li>
                            <li><span class="fa fa-star star-3"></span></li>
                            <li><span class="fa fa-star star-4"></span></li>
                            <li><span class="fa fa-star-o star-5"></span></li>
                        </ul>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <a href="single.html" class="propWidget-2">
                    <div class="fig">
                        <img src="images/prop/2-1.png" alt="Hauntingly Beautiful Estate">
                        <img class="blur" src="images/prop/2-1.png" alt="Hauntingly Beautiful Estate">
                        <div class="opac"></div>
                        <div class="priceCap osLight"><span>$1,550,000</span></div>
                        <div class="figType">RENTA</div>
                        <h3 class="osLight">Hauntingly Beautiful Estate</h3>
                        <div class="address">39 Remsen St, Brooklyn, NY 11201, USA</div>
                        <ul class="rating">
                            <li><span class="fa fa-star star-1"></span></li>
                            <li><span class="fa fa-star star-2"></span></li>
                            <li><span class="fa fa-star star-3"></span></li>
                            <li><span class="fa fa-star star-4"></span></li>
                            <li><span class="fa fa-star star-5"></span></li>
                        </ul>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <a href="single.html" class="propWidget-2">
                    <div class="fig">
                        <img src="images/prop/3-1.png" alt="Luxury Mansion">
                        <img class="blur" src="images/prop/3-1.png" alt="Luxury Mansion">
                        <div class="opac"></div>
                        <div class="priceCap osLight"><span>$2,350,000</span></div>
                        <div class="figType">VENTA</div>
                        <h3 class="osLight">Luxury Mansion</h3>
                        <div class="address">39 Remsen St, Brooklyn, NY 11201, USA</div>
                        <ul class="rating">
                            <li><span class="fa fa-star star-1"></span></li>
                            <li><span class="fa fa-star star-2"></span></li>
                            <li><span class="fa fa-star star-3"></span></li>
                            <li><span class="fa fa-star star-4"></span></li>
                            <li><span class="fa fa-star star-5"></span></li>
                        </ul>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <a href="single.html" class="propWidget-2">
                    <div class="fig">
                        <img src="images/prop/4-1.png" alt="Sophisticated Residence">
                        <img class="blur" src="images/prop/4-1.png" alt="Sophisticated Residence">
                        <div class="opac"></div>
                        <div class="priceCap osLight"><span>$1,340,000</span></div>
                        <div class="figType">RENTA</div>
                        <h3 class="osLight">Sophisticated Residence</h3>
                        <div class="address">39 Remsen St, Brooklyn, NY 11201, USA</div>
                        <ul class="rating">
                            <li><span class="fa fa-star star-1"></span></li>
                            <li><span class="fa fa-star star-2"></span></li>
                            <li><span class="fa fa-star star-3"></span></li>
                            <li><span class="fa fa-star star-4"></span></li>
                            <li><span class="fa fa-star star-5"></span></li>
                        </ul>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <a href="single.html" class="propWidget-2">
                    <div class="fig">
                        <img src="images/prop/5-1.png" alt="House With a Lovely Glass">
                        <img class="blur" src="images/prop/5-1.png" alt="House With a Lovely Glass">
                        <div class="opac"></div>
                        <div class="priceCap osLight"><span>$1,930,000</span></div>
                        <div class="figType">VENTA</div>
                        <h3 class="osLight">House With a Lovely Glass</h3>
                        <div class="address">39 Remsen St, Brooklyn, NY 11201, USA</div>
                        <ul class="rating">
                            <li><span class="fa fa-star star-1"></span></li>
                            <li><span class="fa fa-star star-2"></span></li>
                            <li><span class="fa fa-star star-3"></span></li>
                            <li><span class="fa fa-star star-4"></span></li>
                            <li><span class="fa fa-star star-5"></span></li>
                        </ul>
                    </div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <a href="single.html" class="propWidget-2">
                    <div class="fig">
                        <img src="images/prop/1-1.png" alt="Modern Residence in New York">
                        <img class="blur" src="images/prop/1-1.png" alt="Modern Residence in New York">
                        <div class="opac"></div>
                        <div class="priceCap osLight"><span>$1,750,000</span></div>
                        <div class="figType">VENTA</div>
                        <h3 class="osLight">Modern Residence in New York</h3>
                        <div class="address">39 Remsen St, Brooklyn, NY 11201, USA</div>
                        <ul class="rating">
                            <li><span class="fa fa-star star-1"></span></li>
                            <li><span class="fa fa-star star-2"></span></li>
                            <li><span class="fa fa-star star-3"></span></li>
                            <li><span class="fa fa-star star-4"></span></li>
                            <li><span class="fa fa-star-o star-5"></span></li>
                        </ul>
                    </div>
                </a>
            </div>
        </div>
        <h2 class="osLight">Our Agents</h2>
        <div class="row pb40">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="agent">
                    <a href="profile.html" class="agent-avatar">
                        <img src="images/avatar-1.png" alt="John Smith">
                        <div class="ring"></div>
                    </a>
                    <div class="agent-name osLight">John Smith</div>
                    <div class="agent-rating">
                        <span class="fa fa-star text-yellow"></span>
                        <span class="fa fa-star text-yellow"></span>
                        <span class="fa fa-star text-yellow"></span>
                        <span class="fa fa-star text-yellow"></span>
                        <span class="fa fa-star text-yellow"></span>
                    </div>
                    <div class="agent-contact">
                        <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-green"><span
                                    class="fa fa-envelope-o"></span></a> <a href="#"
                                                                            class="btn btn-sm btn-icon btn-round btn-o btn-facebook"><span
                                    class="fa fa-facebook"></span></a> <a href="#"
                                                                          class="btn btn-sm btn-icon btn-round btn-o btn-twitter"><span
                                    class="fa fa-twitter"></span></a> <a href="#"
                                                                         class="btn btn-sm btn-icon btn-round btn-o btn-google"><span
                                    class="fa fa-google-plus"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="agent">
                    <a href="profile.html" class="agent-avatar">
                        <img src="images/avatar-2.png" alt="Jane Smith">
                        <div class="ring"></div>
                    </a>
                    <div class="agent-name osLight">Jane Smith</div>
                    <div class="agent-rating">
                        <span class="fa fa-star text-yellow"></span>
                        <span class="fa fa-star text-yellow"></span>
                        <span class="fa fa-star text-yellow"></span>
                        <span class="fa fa-star text-yellow"></span>
                        <span class="fa fa-star text-yellow"></span>
                    </div>
                    <div class="agent-contact">
                        <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-green"><span
                                    class="fa fa-envelope-o"></span></a> <a href="#"
                                                                            class="btn btn-sm btn-icon btn-round btn-o btn-facebook"><span
                                    class="fa fa-facebook"></span></a> <a href="#"
                                                                          class="btn btn-sm btn-icon btn-round btn-o btn-twitter"><span
                                    class="fa fa-twitter"></span></a> <a href="#"
                                                                         class="btn btn-sm btn-icon btn-round btn-o btn-google"><span
                                    class="fa fa-google-plus"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="agent">
                    <a href="profile.html" class="agent-avatar">
                        <img src="images/avatar-3.png" alt="Rust Cohle">
                        <div class="ring"></div>
                    </a>
                    <div class="agent-name osLight">Rust Cohle</div>
                    <div class="agent-rating">
                        <span class="fa fa-star text-yellow"></span>
                        <span class="fa fa-star text-yellow"></span>
                        <span class="fa fa-star text-yellow"></span>
                        <span class="fa fa-star text-yellow"></span>
                        <span class="fa fa-star text-yellow"></span>
                    </div>
                    <div class="agent-contact">
                        <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-green"><span
                                    class="fa fa-envelope-o"></span></a> <a href="#"
                                                                            class="btn btn-sm btn-icon btn-round btn-o btn-facebook"><span
                                    class="fa fa-facebook"></span></a> <a href="#"
                                                                          class="btn btn-sm btn-icon btn-round btn-o btn-twitter"><span
                                    class="fa fa-twitter"></span></a> <a href="#"
                                                                         class="btn btn-sm btn-icon btn-round btn-o btn-google"><span
                                    class="fa fa-google-plus"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                <div class="agent">
                    <a href="profile.html" class="agent-avatar">
                        <img src="images/avatar-4.png" alt="Antony Iglesias">
                        <div class="ring"></div>
                    </a>
                    <div class="agent-name osLight">Antony Iglesias</div>
                    <div class="agent-rating">
                        <span class="fa fa-star text-yellow"></span>
                        <span class="fa fa-star text-yellow"></span>
                        <span class="fa fa-star text-yellow"></span>
                        <span class="fa fa-star text-yellow"></span>
                        <span class="fa fa-star text-yellow"></span>
                    </div>
                    <div class="agent-contact">
                        <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-green"><span
                                    class="fa fa-envelope-o"></span></a> <a href="#"
                                                                            class="btn btn-sm btn-icon btn-round btn-o btn-facebook"><span
                                    class="fa fa-facebook"></span></a> <a href="#"
                                                                          class="btn btn-sm btn-icon btn-round btn-o btn-twitter"><span
                                    class="fa fa-twitter"></span></a> <a href="#"
                                                                         class="btn btn-sm btn-icon btn-round btn-o btn-google"><span
                                    class="fa fa-google-plus"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="osLight">Testimonials</h2>
        <div id="home-testimonials" class="carousel slide carousel-wb mb20" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#home-testimonials" data-slide-to="0" class="active"></li>
                <li data-target="#home-testimonials" data-slide-to="1" class=""></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/avatar-2.png" class="home-testim-avatar" alt="Jane Smith">
                    <div class="home-testim">
                        <div class="home-testim-text">There are many variations of passages of Lorem Ipsum available,
                            but the majority have suffered alteration in some form, by injected humour, or randomised
                            words
                        </div>
                        <div class="home-testim-name">Jane Smith</div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/avatar-3.png" class="home-testim-avatar" alt="Rust Cohle">
                    <div class="home-testim">
                        <div class="home-testim-text">There are many variations of passages of Lorem Ipsum available,
                            but the majority have suffered alteration in some form, by injected humour, or randomised
                            words
                        </div>
                        <div class="home-testim-name">Rust Cohle</div>
                    </div>
                </div>
            </div>
        </div>
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

<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery-ui-touch-punch.js"></script>
<script src="js/jquery.placeholder.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.touchSwipe.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=true&amp;libraries=geometry&amp;libraries=places"
        type="text/javascript"></script>
<script src="js/infobox.js"></script>
<script src="js/jquery.visible.js"></script>
<script src="js/home.js" type="text/javascript"></script>
</body>
</html>