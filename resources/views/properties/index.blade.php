@extends('layouts._main')

@section('title','Propiedades')

@section('content')
    <div class="filter">
        <div style="padding: 5px; background-color: #636263; color: white;">
            Se han encontrado: <b>{{ $properties->count() }}</b> propiedades
        </div>
        <h1 class="osLight">Filtra tus resultados</h1>
        <div class="clearfix"></div>

        <form class="filterForm" method="get" action="{!! route('properties.index') !!}">
            <div class="row">
            </div>
            <div class="row" id="filterCity" style="">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <label>Ciudad</label>
                        <input type="text" class="form-control auto" name="city" id="city"
                               value="{{ $city ? $city->name: $input['city'] }}" placeholder="Ciudad"
                               autocomplete="off">
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
                            <label><b>Habitaciones</b></label>
                            <a href="#" data-toggle="dropdown"
                               class="btn btn-gray dropdown-btn dropdown-toggle propTypeSelect">
                                <span class="dropdown-label">Habitaciones</span>
                                <span class="fa fa-angle-down dsArrow"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-select full" role="menu">
                                <li class="active">
                                    <input type="radio" name="p_bedrooms" checked="checked" value="0">
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
                            <label><b>Baños</b></label>
                            <a href="#" data-toggle="dropdown"
                               class="btn btn-gray dropdown-btn dropdown-toggle propTypeSelect">
                                <span class="dropdown-label">Baños</span>
                                <span class="fa fa-angle-down dsArrow"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-select full" role="menu">
                                <li class="active">
                                    <input type="radio" name="p_bathrooms" checked="checked" value="0">
                                    <a href="#">Baños</a>
                                </li>
                                <li><input type="radio" name="p_bathrooms" value="1"><a href="#">1+</a></li>
                                <li><input type="radio" name="p_bathrooms" value="2"><a href="#">2+</a></li>
                                <li><input type="radio" name="p_bathrooms" value="3"><a href="#">3+</a></li>
                                <li><input type="radio" name="p_bathrooms" value="4"><a href="#">4+</a></li>
                                <li><input type="radio" name="p_bathrooms" value="5"><a href="#">5+</a></li>
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
                            <label for="search_neighborhood">Colonia / Sector</label>
                            <input type="text" class="form-control" name="neighborhood" id="search_neighborhood"
                                   value="" placeholder="Colonia / Sector" autocomplete="off">
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
                                            <span class="fa fa-check"></span> Alberca</label>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                    <div class="checkbox custom-checkbox">
                                        <label>
                                            <input class="p_amenities" type="checkbox" name="internet" value="1">
                                            <span class="fa fa-check"></span> Internet
                                        </label>
                                    </div>
                                </div>
                                {{--<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                    <div class="checkbox custom-checkbox">
                                        <label>
                                            <input class="p_amenities" type="checkbox" name="balcony" value="1">
                                            <span class="fa fa-check"></span> Balcon
                                        </label>
                                    </div>
                                </div>--}}
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                    <div class="checkbox custom-checkbox">
                                        <label>
                                            <input class="p_amenities" type="checkbox" name="air_conditioning"
                                                   value="1">
                                            <span class="fa fa-check"></span> Aire Acondicionado
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                    <div class="checkbox custom-checkbox">
                                        <label>
                                            <input class="p_amenities" type="checkbox" name="security_system" value="1">
                                            <span class="fa fa-check"></span> Seguridad
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                    <div class="checkbox custom-checkbox">
                                        <label>
                                            <input class="p_amenities" type="checkbox" name="garage" value="1">
                                            <span class="fa fa-check"></span> Cochera
                                        </label>
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
                        <a href="#" class="btn btn-green mb-10" id="filterPropertySubmit">
                            Buscar
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
        <div class="row" id="resultListElements">
            @each('properties.partials.box',$properties,'property')
        </div>
        {{--<ul class="pagination">
            <li class="disabled"><a href="#"><span class="fa fa-angle-left"></span></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#"><span class="fa fa-angle-right"></span></a></li>
        </ul>--}}
    </div>
    @include('properties.partials.download')
@endsection

@section('_footer')
    <script>
        var price_set = @if(isset($input['price'])) [{!! $input['price'][0] !!},{!! $input['price'][1] !!}]
                @else [{!! $price_limit[0] !!},{!! $price_limit[1] !!}] @endif;
        var price_limit = [{!! $price_limit[0] !!},{!! $price_limit[1] !!}];

        var _latitude;
        var _longitude;
        var _props = [@foreach($properties as $property)
        {
            id: {{ $property->id }},
            title: "{{ $property->details->title }}",
            image: '{!! $property->images->first()->system == 'URL' ? asset($property->images->first()->path):Storage::disk('public')->url($property->images->first()->path) !!}',
            type: '{{ trans('search.'.$property->operation) }}',
            price: '$ {{ number_format($property->price, 2, '.',',') }}',
            address: '{{ $property->address }}',
            bedrooms: '{{ $property->bedrooms }}',
            bathrooms: '{{ $property->bathrooms }}',
            area: '{{ $property->details->ground }} m<sup>2</sup>',
            position: {
                lat: {{ $property->latitude }},
                lng: {{ $property->longitude }}
            },
            markerIcon: "{{ $property->status == 'active'?"marker-blue.png":"marker-yellow.png" }}",
        },
            @endforeach
        ];

        @if($city->id > 0)
            _latitude = {!! $city->latitude !!};
        _longitude = {!! $city->longitude !!};
        @else
            _latitude = 20.6690251;
        _longitude = -103.3388489;

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
                @endif
        var URL_PROPERTIES = "{!! route('properties.index') !!}";
    </script>
    @parent
    <script src="/js/download_pdf.js" type="text/javascript"></script>
    <script src="/js/properties.box.js" type="text/javascript"></script>
    <script>
        @if(!auth()->check() && session('properties_login', true))
        $(document).ready(function () {
            $('#signin').modal('show');
        });
        <?php session(['properties_login' => false]) ?>
        @endif
    </script>
@endsection