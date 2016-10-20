@extends('layouts._main')

@section('title','Propiedades')

@section('content')
    <div class="filter">
        <h1 class="osLight">Filtra tus resultados</h1>
        <div class="clearfix"></div>

        <form class="filterForm">
            <div class="row">
            </div>
            <div class="row" id="filterCity" style="">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <label>Ciudad</label>
                        <input type="text" class="form-control auto" name="city" id="search_city"
                               value="{{ $city->name }}" placeholder="Ciudad" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 formItem">

                    <div class="formField">
                        <label>Precio</label>
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
                        <label>Inmuebles</label>
                        <a href="#" data-toggle="dropdown"
                           class="btn btn-gray dropdown-btn dropdown-toggle propTypeSelect">
                            <span class="dropdown-label">Todos</span>
                            <span class="fa fa-angle-down dsArrow"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-select full" role="menu">
                            <li class="active"><input type="radio" name="p_inmob" checked="checked" value="all">
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
                        <label>Tipos</label>
                        <a href="#" data-toggle="dropdown"
                           class="btn btn-gray dropdown-btn dropdown-toggle propTypeSelect">
                            <span class="dropdown-label">Todos</span>
                            <span class="fa fa-angle-down dsArrow"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-select full" role="menu">
                            <li class="active"><input type="radio" name="p_type" checked="checked" value="all">
                                <a href="#">Todos</a>
                            </li>
                            <li><input type="radio" name="p_type" value="sale"><a href="#">Venta</a></li>
                            <li><input type="radio" name="p_type" value="rent"><a href="#">Renta</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="advancedFilter" style="display: none;">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 formItem">

                        <div class="formField">
                            <label>Habitaciones</label>
                            <a href="#" data-toggle="dropdown"
                               class="btn btn-gray dropdown-btn dropdown-toggle propTypeSelect">
                                <span class="dropdown-label">Habitaciones</span>
                                <span class="fa fa-angle-down dsArrow"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-select full" role="menu">
                                <li class="active"><input type="radio" name="p_bedrooms" checked="checked" value="0">
                                    <a href="#">Habitaciones</a>
                                </li>
                                <li><input type="radio" name="p_bedrooms" value="1"><a href="#">1+</a></li>
                                <li><input type="radio" name="p_bedrooms" value="2"><a href="#">2+</a></li>
                                <li><input type="radio" name="p_bedrooms" value="3"><a href="#">3+</a></li>
                                <li><input type="radio" name="p_bedrooms" value="4"><a href="#">4+</a></li>
                                <li><input type="radio" name="p_bedrooms" value="5"><a href="#">5+</a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 formItem">

                        <div class="formField">
                            <label>Baños</label>
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
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 formItem">

                        <div class="formField">
                            <label>Construcción</label>
                            <div class="slider areaSlider">
                                <div class="sliderTooltip">
                                    <div class="stArrow"></div>
                                    <div class="stLabel"></div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 formItem">
                        <div class="form-group">
                            <label for="search_neighborhood">Colonia / Delegacion</label>
                            <input type="text" class="form-control" name="search_neighborhood" id="search_neighborhood"
                                   value="" placeholder="Colonia / Delegacion" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="row"></div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 formItem">
                        <div class="form-group"><label>Amenidades</label>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                    <div class="checkbox custom-checkbox">
                                        <label><input type="checkbox" name="outdoor_pool" value="1">
                                            <span class="fa fa-check"></span> Piscina</label>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                    <div class="checkbox custom-checkbox">
                                        <label><input type="checkbox" name="internet" value="1">
                                            <span class="fa fa-check"></span> Internet</label>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                    <div class="checkbox custom-checkbox">
                                        <label><input type="checkbox" name="balcony" value="1">
                                            <span class="fa fa-check"></span> Balcon</label>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                    <div class="checkbox custom-checkbox">
                                        <label><input type="checkbox" name="air_conditioning" value="1">
                                            <span class="fa fa-check"></span> Aire Acondicionado</label>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                    <div class="checkbox custom-checkbox">
                                        <label><input type="checkbox" name="security_system" value="1">
                                            <span class="fa fa-check"></span> Seguridad</label>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                    <div class="checkbox custom-checkbox">
                                        <label><input type="checkbox" name="garage" value="1">
                                            <span class="fa fa-check"></span> Cochera</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <a href="javascript:void(0);" class="btn btn-green mb-10" id="filterPropertySubmit">
                            Aplicar Filtros
                        </a>
                        <a href="javascript:void(0);" class="btn btn-gray display mb-10" id="showAdvancedFilter">
                            Mostrar Filtros Avanzados
                        </a>
                        <a href="javascript:void(0);" class="btn btn-gray mb-10" id="hideAdvancedFilter"
                           style="display: none;">
                            Ocultar Filtros Avanzados
                        </a>
                    </div>
                </div>
            </div>
        </form>

    </div>
    <div class="resultsList">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <a href="{!! route('properties.show',['id'=>1]) !!}" class="card">
                    <div class="figure">
                        <img src="images/prop/1-1.png" alt="image">
                        <div class="figCaption">
                            <div>$1,550,000</div>
                            <span class="icon-eye"> 200</span>
                            <span class="icon-heart"> 54</span>
                            <span class="icon-bubble"> 13</span>
                        </div>
                        <div class="figView"><span class="icon-eye"></span></div>
                        <div class="figType">VENTA</div>
                    </div>
                    <h2>Modern Residence in New York</h2>
                    <div class="cardAddress"><span class="icon-pointer"></span> 39 Remsen St, Brooklyn, NY 11201, USA
                    </div>
                    <div class="cardRating">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-o"></span>
                        (146)
                    </div>
                    <ul class="cardFeat">
                        <li><span class="fa fa-moon-o"></span> 3</li>
                        <li><span class="icon-drop"></span> 2</li>
                        <li><span class="icon-frame"></span> 3430 Sq Ft</li>
                    </ul>
                    <div class="clearfix"></div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <a href="{!! route('properties.show',['id'=>1]) !!}" class="card">
                    <div class="figure">
                        <img src="images/prop/2-1.png" alt="image">
                        <div class="figCaption">
                            <div>$1,750,000</div>
                            <span class="icon-eye"> 175</span>
                            <span class="icon-heart"> 67</span>
                            <span class="icon-bubble"> 9</span>
                        </div>
                        <div class="figView"><span class="icon-eye"></span></div>
                        <div class="figType">RENTA</div>
                    </div>
                    <h2>Hauntingly Beautiful Estate</h2>
                    <div class="cardAddress"><span class="icon-pointer"></span> 169 Warren St, Brooklyn, NY 11201, USA
                    </div>
                    <div class="cardRating">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        (123)
                    </div>
                    <ul class="cardFeat">
                        <li><span class="fa fa-moon-o"></span> 2</li>
                        <li><span class="icon-drop"></span> 2</li>
                        <li><span class="icon-frame"></span> 4430 Sq Ft</li>
                    </ul>
                    <div class="clearfix"></div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <a href="{!! route('properties.show',['id'=>1]) !!}" class="card">
                    <div class="figure">
                        <img src="images/prop/3-1.png" alt="image">
                        <div class="figCaption">
                            <div>$1,340,000</div>
                            <span class="icon-eye"> 180</span>
                            <span class="icon-heart"> 87</span>
                            <span class="icon-bubble"> 12</span>
                        </div>
                        <div class="figView"><span class="icon-eye"></span></div>
                        <div class="figType">RENTA</div>
                    </div>
                    <h2>Sophisticated Residence</h2>
                    <div class="cardAddress"><span class="icon-pointer"></span> 38-62 Water St, Brooklyn, NY 11201, USA
                    </div>
                    <div class="cardRating">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        (120)
                    </div>
                    <ul class="cardFeat">
                        <li><span class="fa fa-moon-o"></span> 2</li>
                        <li><span class="icon-drop"></span> 3</li>
                        <li><span class="icon-frame"></span> 2640 Sq Ft</li>
                    </ul>
                    <div class="clearfix"></div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <a href="{!! route('properties.show',['id'=>1]) !!}" class="card">
                    <div class="figure">
                        <img src="images/prop/4-1.png" alt="image">
                        <div class="figCaption">
                            <div>$1,930,000</div>
                            <span class="icon-eye"> 145</span>
                            <span class="icon-heart"> 99</span>
                            <span class="icon-bubble"> 25</span>
                        </div>
                        <div class="figView"><span class="icon-eye"></span></div>
                        <div class="figType">VENTA</div>
                    </div>
                    <h2>House With a Lovely Glass-Roofed Pergola</h2>
                    <div class="cardAddress"><span class="icon-pointer"></span> Wunsch Bldg, Brooklyn, NY 11201, USA
                    </div>
                    <div class="cardRating">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-o"></span>
                        (170)
                    </div>
                    <ul class="cardFeat">
                        <li><span class="fa fa-moon-o"></span> 3</li>
                        <li><span class="icon-drop"></span> 2</li>
                        <li><span class="icon-frame"></span> 2800 Sq Ft</li>
                    </ul>
                    <div class="clearfix"></div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <a href="{!! route('properties.show',['id'=>1]) !!}" class="card">
                    <div class="figure">
                        <img src="images/prop/5-1.png" alt="image">
                        <div class="figCaption">
                            <div>$2,350,000</div>
                            <span class="icon-eye"> 184</span>
                            <span class="icon-heart"> 120</span>
                            <span class="icon-bubble"> 18</span>
                        </div>
                        <div class="figView"><span class="icon-eye"></span></div>
                        <div class="figType">RENTA</div>
                    </div>
                    <h2>Luxury Mansion</h2>
                    <div class="cardAddress"><span class="icon-pointer"></span> 95 Butler St, Brooklyn, NY 11231, USA
                    </div>
                    <div class="cardRating">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-o"></span>
                        (257)
                    </div>
                    <ul class="cardFeat">
                        <li><span class="fa fa-moon-o"></span> 2</li>
                        <li><span class="icon-drop"></span> 2</li>
                        <li><span class="icon-frame"></span> 2750 Sq Ft</li>
                    </ul>
                    <div class="clearfix"></div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <a href="{!! route('properties.show',['id'=>1]) !!}" class="card">
                    <div class="figure">
                        <img src="images/prop/1-1.png" alt="image">
                        <div class="figCaption">
                            <div>$1,550,000</div>
                            <span class="icon-eye"> 200</span>
                            <span class="icon-heart"> 54</span>
                            <span class="icon-bubble"> 13</span>
                        </div>
                        <div class="figView"><span class="icon-eye"></span></div>
                        <div class="figType">VENTA</div>
                    </div>
                    <h2>Modern Residence in New York</h2>
                    <div class="cardAddress"><span class="icon-pointer"></span> 39 Remsen St, Brooklyn, NY 11201, USA
                    </div>
                    <div class="cardRating">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        (146)
                    </div>
                    <ul class="cardFeat">
                        <li><span class="fa fa-moon-o"></span> 3</li>
                        <li><span class="icon-drop"></span> 2</li>
                        <li><span class="icon-frame"></span> 3430 Sq Ft</li>
                    </ul>
                    <div class="clearfix"></div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <a href="{!! route('properties.show',['id'=>1]) !!}" class="card">
                    <div class="figure">
                        <img src="images/prop/2-1.png" alt="image">
                        <div class="figCaption">
                            <div>$1,750,000</div>
                            <span class="icon-eye"> 175</span>
                            <span class="icon-heart"> 67</span>
                            <span class="icon-bubble"> 9</span>
                        </div>
                        <div class="figView"><span class="icon-eye"></span></div>
                        <div class="figType">RENTA</div>
                    </div>
                    <h2>Hauntingly Beautiful Estate</h2>
                    <div class="cardAddress"><span class="icon-pointer"></span> 169 Warren St, Brooklyn, NY 11201, USA
                    </div>
                    <div class="cardRating">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-o"></span>
                        (123)
                    </div>
                    <ul class="cardFeat">
                        <li><span class="fa fa-moon-o"></span> 2</li>
                        <li><span class="icon-drop"></span> 2</li>
                        <li><span class="icon-frame"></span> 4430 Sq Ft</li>
                    </ul>
                    <div class="clearfix"></div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <a href="{!! route('properties.show',['id'=>1]) !!}" class="card">
                    <div class="figure">
                        <img src="images/prop/3-1.png" alt="image">
                        <div class="figCaption">
                            <div>$1,340,000</div>
                            <span class="icon-eye"> 180</span>
                            <span class="icon-heart"> 87</span>
                            <span class="icon-bubble"> 12</span>
                        </div>
                        <div class="figView"><span class="icon-eye"></span></div>
                        <div class="figType">RENTA</div>
                    </div>
                    <h2>Sophisticated Residence</h2>
                    <div class="cardAddress"><span class="icon-pointer"></span> 38-62 Water St, Brooklyn, NY 11201, USA
                    </div>
                    <div class="cardRating">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-o"></span>
                        (120)
                    </div>
                    <ul class="cardFeat">
                        <li><span class="fa fa-moon-o"></span> 2</li>
                        <li><span class="icon-drop"></span> 3</li>
                        <li><span class="icon-frame"></span> 2640 Sq Ft</li>
                    </ul>
                    <div class="clearfix"></div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <a href="{!! route('properties.show',['id'=>1]) !!}" class="card">
                    <div class="figure">
                        <img src="images/prop/4-1.png" alt="image">
                        <div class="figCaption">
                            <div>$1,930,000</div>
                            <span class="icon-eye"> 145</span>
                            <span class="icon-heart"> 99</span>
                            <span class="icon-bubble"> 25</span>
                        </div>
                        <div class="figView"><span class="icon-eye"></span></div>
                        <div class="figType">VENTA</div>
                    </div>
                    <h2>House With a Lovely Glass-Roofed Pergola</h2>
                    <div class="cardAddress"><span class="icon-pointer"></span> Wunsch Bldg, Brooklyn, NY 11201, USA
                    </div>
                    <div class="cardRating">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-o"></span>
                        (170)
                    </div>
                    <ul class="cardFeat">
                        <li><span class="fa fa-moon-o"></span> 3</li>
                        <li><span class="icon-drop"></span> 2</li>
                        <li><span class="icon-frame"></span> 2800 Sq Ft</li>
                    </ul>
                    <div class="clearfix"></div>
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <a href="{!! route('properties.show',['id'=>1]) !!}" class="card">
                    <div class="figure">
                        <img src="images/prop/5-1.png" alt="image">
                        <div class="figCaption">
                            <div>$2,350,000</div>
                            <span class="icon-eye"> 184</span>
                            <span class="icon-heart"> 120</span>
                            <span class="icon-bubble"> 18</span>
                        </div>
                        <div class="figView"><span class="icon-eye"></span></div>
                        <div class="figType">RENTA</div>
                    </div>
                    <h2>Luxury Mansion</h2>
                    <div class="cardAddress"><span class="icon-pointer"></span> 95 Butler St, Brooklyn, NY 11231, USA
                    </div>
                    <div class="cardRating">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-o"></span>
                        (257)
                    </div>
                    <ul class="cardFeat">
                        <li><span class="fa fa-moon-o"></span> 2</li>
                        <li><span class="icon-drop"></span> 2</li>
                        <li><span class="icon-frame"></span> 2750 Sq Ft</li>
                    </ul>
                    <div class="clearfix"></div>
                </a>
            </div>
        </div>
        <ul class="pagination">
            <li class="disabled"><a href="#"><span class="fa fa-angle-left"></span></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#"><span class="fa fa-angle-right"></span></a></li>
        </ul>
    </div>
@endsection
@section('_footer')
    <script>
        var _latitude;
        var _longitude;

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(successFunction, errorFunction);
        }
        //Get the latitude and the longitude;
        function successFunction(position) {
            _latitude = position.coords.latitude;
            _longitude = position.coords.longitude;
            /*codeLatLng(lat, lng)*/
        }

        function errorFunction() {
            _latitude = 20.6690251;
            _longitude = -103.3388489;
        }
        @if($city->id > 0)
            _latitude = {!! $city->latitude !!};
        _longitude = {!! $city->longitude !!};
        @endif
    </script>
    @parent
@endsection