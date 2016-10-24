@extends('layouts._main')

@section('_header')
    @parent
    <link href="{!! asset('css/fileinput.min.css') !!}" rel="stylesheet">
@endsection

@section('content')
    <div class="rightContainer">
        <h1>Nueva Propiedad</h1>
        <form role="form">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="form-group">
                        <label>Titulo</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label>Precio</label>
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
                            <input class="form-control" type="text" name="price">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Descripcion</label>
                <textarea class="form-control" rows="4" name="description"></textarea>
            </div>
            <div class="form-group">
                <label>Direccion
                    <span id="latitude" class="label label-default"></span>
                    <span id="longitude" class="label label-default"></span>
                </label>
                <input class="form-control" type="text" id="address" placeholder="Enter a Location" autocomplete="off">
                <p class="help-block">You can drag the marker to property position</p>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="form-group">
                        <label>Habitaciones</label>
                        <input type="text" class="form-control" name="bedrooms">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="form-group">
                        <label>Baños</label>
                        <input type="text" class="form-control" name="bathrooms">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="form-group">
                        <label>Area</label>
                        <div class="input-group">
                            <input class="form-control" type="text" name="ground">
                            <div class="input-group-addon">m<sup>2</sup></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="btn-group">
                        <label>Tipo</label>
                        <div class="clearfix"></div>
                        <a href="#" data-toggle="dropdown" class="btn btn-default dropdown-toggle">
                            <span class="dropdown-label">VENTA</span>&nbsp;&nbsp;&nbsp;
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-select">
                            <li class="active">
                                <input type="radio" name="p_type" checked="checked" value="for_sale">
                                <a href="#">VENTA</a>
                            </li>
                            <li>
                                <input type="radio" name="p_type" value="for_rent">
                                <a href="#">RENTA</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <label>Imagenes</label>
                        <input type="file" class="file" multiple data-show-upload="false" data-show-caption="false"
                               data-show-remove="false" accept="image/jpeg,image/png"
                               data-browse-class="btn btn-o btn-default" data-browse-label="Seleccionar Imagenes">
                        <p class="help-block">Pudes seleccionar miltiples imagenes a la vez</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label>Amenidades</label>
                        <div class="checkbox custom-checkbox">
                            <label>
                                <input type="checkbox">
                                <span class="fa fa-check"></span> Cochera
                            </label>
                        </div>
                        <div class="checkbox custom-checkbox">
                            <label>
                                <input type="checkbox">
                                <span class="fa fa-check"></span> Seguridad
                            </label>
                        </div>
                        <div class="checkbox custom-checkbox">
                            <label>
                                <input type="checkbox">
                                <span class="fa fa-check"></span> Aire Acondicionado
                            </label>
                        </div>
                        <div class="checkbox custom-checkbox">
                            <label>
                                <input type="checkbox">
                                <span class="fa fa-check"></span> Balcon
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label>&nbsp;</label>
                        <div class="checkbox custom-checkbox">
                            <label>
                                <input type="checkbox">
                                <span class="fa fa-check"></span> Piscina
                            </label>
                        </div>
                        <div class="checkbox custom-checkbox">
                            <label>
                                <input type="checkbox">
                                <span class="fa fa-check"></span> Internet
                            </label>
                        </div>
                        <div class="checkbox custom-checkbox">
                            <label>
                                <input type="checkbox">
                                <span class="fa fa-check"></span> Heating
                            </label>
                        </div>
                        <div class="checkbox custom-checkbox">
                            <label>
                                <input type="checkbox">
                                <span class="fa fa-check"></span> TV por Cable
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label>&nbsp;</label>
                        <div class="checkbox custom-checkbox">
                            <label>
                                <input type="checkbox">
                                <span class="fa fa-check"></span> Jardin
                            </label>
                        </div>
                        <div class="checkbox custom-checkbox">
                            <label>
                                <input type="checkbox">
                                <span class="fa fa-check"></span> Telefono
                            </label>
                        </div>
                        <div class="checkbox custom-checkbox">
                            <label>
                                <input type="checkbox">
                                <span class="fa fa-check"></span> Chimenea
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <a href="#" class="btn btn-green btn-lg">Guardar Propiedad</a>
            </div>
        </form>
    </div>
@endsection

@section('_footer')
    <script>
        var price_set = [0, 0];
        var price_limit = [0, 0];
        var _latitude;
        var _longitude;
        var _props = [];

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

        var URL_PROPERTIES = "{!! route('properties.index') !!}";
    </script>
    @parent
    <script src="{!! asset('js/json2.js') !!}"></script>
    <script src="{!! asset('js/underscore.js') !!}"></script>
    <script src="{!! asset('js/moment-2.5.1.js') !!}"></script>
    <script src="{!! asset('js/jquery.visible.js') !!}"></script>
    <script src="{!! asset('js/clndr.js') !!}"></script>
    <script src="{!! asset('js/fileinput.min.js') !!}"></script>
    <script src="{!! asset('js/calendar.js') !!}"></script>
@endsection