@extends('layouts._welcome')

@section('content')
    <div class="highlight">
        <div class="h-title osLight">Te ayudamos a encontrar ese nuevo lugar ideal para ti</div>
        <div class="h-text osLight">
            Locales comerciales, casas, departamentos, terrenos y oficinas.
        </div>
    </div>
    <div class="home-wrapper">
        <div class="home-content">
            <h2 class="osLight">Conocenos</h2>
            <div class="row pb40">
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 s-menu-item">
                    <a href="#">
                        <span class="fa fa-handshake-o s-icon" aria-hidden="true"></span>
                        <div class="s-content">
                            <h2 class="s-main osLight">Amigable y práctica</h2>
                            <h3 class="s-sub osLight">
                                Plataforma amigable y práctica para buscar en nuestro catálogo de propiedades.
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 s-menu-item">
                    <a href="#">
                        <span class="s-icon fa fa-users" aria-hidden="true"></span>
                        <div class="s-content">
                            <h2 class="s-main osLight">Siempre contigo</h2>
                            <h3 class="s-sub osLight">
                                Te acompañamos desde la búsqueda de la propiedad hasta la escrituración o celebración de
                                contrato de arrendamiento
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 s-menu-item">
                    <a href="#">
                        <span class="s-icon fa fa-street-view" aria-hidden="true"></span>
                        <div class="s-content">
                            <h2 class="s-main osLight">Especialistas</h2>
                            <h3 class="s-sub osLight">
                                Agentes preparados y especializados por áreas. Área habitacional; área comercial; y área
                                empresarial
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 s-menu-item">
                    <a href="#">
                        <span class="s-icon fa fa-gavel" aria-hidden="true"></span>
                        <div class="s-content">
                            <h2 class="s-main osLight">Apoyo legal</h2>
                            <h3 class="s-sub osLight">
                                Apoyo legal y además anticipamos el cálculo de impuestos. Ofrecemos estrategias para
                                optimizarlos
                            </h3>
                        </div>
                    </a>
                </div>
            </div>
            <h2 class="osLight">Lo mas nuevo</h2>
            <div class="row pb40">
                @each('welcome.partials.box',$properties,'property')
            </div>
            <h2 class="osLight">Asesores</h2>
            <div class="row pb40">
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="agent">
                        <a href="profile.html" class="agent-avatar">
                            <img src="images/avatar-1.png" alt="Antony Iglesias">
                            <div class="ring"></div>
                        </a>
                        <div class="agent-name osLight">Área habitacional</div>
                        <div class="agent-contact">
                            <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-green">
                                <span class="fa fa-envelope-o"></span>
                            </a>
                            <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-facebook">
                                <span class="fa fa-facebook"></span>
                            </a>
                            <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-twitter">
                                <span class="fa fa-twitter"></span>
                            </a>
                            <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-google">
                                <span class="fa fa-google-plus"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="agent">
                        <a href="profile.html" class="agent-avatar">
                            <img src="images/avatar-3.png" alt="Antony Iglesias">
                            <div class="ring"></div>
                        </a>
                        <div class="agent-name osLight">Área comercial y bodegas</div>
                        <div class="agent-contact">
                            <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-green">
                                <span class="fa fa-envelope-o"></span>
                            </a>
                            <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-facebook">
                                <span class="fa fa-facebook"></span>
                            </a>
                            <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-twitter">
                                <span class="fa fa-twitter"></span>
                            </a>
                            <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-google">
                                <span class="fa fa-google-plus"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="agent">
                        <a href="profile.html" class="agent-avatar">
                            <img src="images/avatar-4.png" alt="Antony Iglesias">
                            <div class="ring"></div>
                        </a>
                        <div class="agent-name osLight">Área corporativa</div>
                        <div class="agent-contact">
                            <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-green">
                                <span class="fa fa-envelope-o"></span>
                            </a>
                            <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-facebook">
                                <span class="fa fa-facebook"></span>
                            </a>
                            <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-twitter">
                                <span class="fa fa-twitter"></span>
                            </a>
                            <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-google">
                                <span class="fa fa-google-plus"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="agent">
                        <a href="profile.html" class="agent-avatar">
                            <img src="images/avatar-2.png" alt="Antony Iglesias">
                            <div class="ring"></div>
                        </a>
                        <div class="agent-name osLight">Área de terrenos</div>
                        <div class="agent-contact">
                            <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-green">
                                <span class="fa fa-envelope-o"></span>
                            </a>
                            <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-facebook">
                                <span class="fa fa-facebook"></span>
                            </a>
                            <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-twitter">
                                <span class="fa fa-twitter"></span>
                            </a>
                            <a href="#" class="btn btn-sm btn-icon btn-round btn-o btn-google">
                                <span class="fa fa-google-plus"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{--AQUI VIDEO--}}
            {{--<h2 class="osLight">Testimonials</h2>
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
            </div>--}}
        </div>
    </div>
@endsection

@section('_footer')
    <script>
        var price_limit = [{!! $price_limit[0] !!},{!! $price_limit[1] !!}];
        var price_set = price_limit;
        var URL_PROPERTIES = "{!! route('properties.index') !!}";
    </script>
    @parent
@endsection

