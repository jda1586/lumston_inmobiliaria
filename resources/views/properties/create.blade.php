@extends('layouts._main')

@section('_header')
    @parent
    <link href="{!! asset('css/fileinput.min.css') !!}" rel="stylesheet">
@endsection

@section('content')
    <div class="rightContainer">
        <h1>Nueva Propiedad</h1>
        <form id="newProperty" role="form" method="post" action="{!! route('properties.store') !!}"
              enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="form-group">
                        <label>Titulo</label>
                        <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        @foreach($errors->get('title') as $error)
                            <span style="color: red; margin: 10px;">{{ $error }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label>Precio</label>
                        <div class="input-group">
                            <div class="input-group-addon">$</div>
                            <input class="form-control" type="text" name="price" value="{{ old('price') }}">
                        </div>
                        @foreach($errors->get('price') as $error)
                            <span style="color: red; margin: 10px;">{{ $error }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Descripcion</label>
                <textarea class="form-control" rows="4" name="description">{{ old('description') }}</textarea>
                @foreach($errors->get('description') as $error)
                    <span style="color: red; margin: 10px;">{{ $error }}</span>
                @endforeach
            </div>
            <div class="row">
                <div class="col-sm-6 col-xs-6 col-md-2 col-lg-2">
                    <div class="form-group">
                        <label>Pais</label>
                        <input type="text" class="form-control" name="country" value="México" disabled>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-6 col-md-5 col-lg-5">
                    <div class="formField">
                        <label>Estado</label>
                        <select name="state" class="btn btn-default dropdown-btn"
                                style="padding: 8px 5px; background-color: white;">
                            <option value="">Selecciona un estado</option>
                            @foreach(\App\State::all() as $state)
                                <option value="{!! $state->id !!}">{{ $state->name }}</option>
                            @endforeach
                        </select>
                        @foreach($errors->get('state') as $error)
                            <span style="color: red; margin: 10px;">{{ $error }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12 col-md-5 col-lg-5">
                    <div class="formField">
                        <label>Ciudad</label>
                        <select name="city" class="btn btn-default dropdown-btn"
                                style="padding: 8px 5px; background-color: white;">
                        </select>
                        @foreach($errors->get('city') as $error)
                            <span style="color: red; margin: 10px;">{{ $error }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Direccion (calle)</label>
                        <input class="form-control" type="text" name="address" autocomplete="off" id="address"
                               value="{{ old('address') }}">
                        @foreach($errors->get('address') as $error)
                            <span style="color: red; margin: 10px;">{{ $error }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
                    <div class="form-group">
                        <label>No. Exterior</label>
                        <input class="form-control" type="text" name="outside" autocomplete="off"
                               value="{{ old('outside') }}">
                        @foreach($errors->get('outside') as $error)
                            <span style="color: red; margin: 10px;">{{ $error }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
                    <div class="form-group">
                        <label>No. Interior</label>
                        <input class="form-control" type="text" name="inside" autocomplete="off"
                               value="{{ old('inside') }}">
                        @foreach($errors->get('inside') as $error)
                            <span style="color: red; margin: 10px;">{{ $error }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Colonia / Sector / Delegacion</label>
                        <input type="text" class="form-control" name="suburb" value="{{ old('suburb') }}">
                        @foreach($errors->get('suburb') as $error)
                            <span style="color: red; margin: 10px;">{{ $error }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Codigo Postal</label>
                        <input type="text" class="form-control" name="postalCode" value="{{ old('postalCode') }}">
                        @foreach($errors->get('postalCode') as $error)
                            <span style="color: red; margin: 10px;">{{ $error }}</span>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="form-group">
                        <label>Latitude</label>
                        <input type="text" name="latitude" id="latitude" class="form-control" readonly
                               value="{{ old('latitude') }}">
                        @foreach($errors->get('latitude') as $error)
                            <span style="color: red; margin: 10px;">{{ $error }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                    <label>Longitude</label>
                    <input type="text" name="longitude" id="longitude" class="form-control" readonly
                           value="{{ old('longitude') }}">
                    @foreach($errors->get('longitude') as $error)
                        <span style="color: red; margin: 10px;">{{ $error }}</span>
                    @endforeach
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="formField">
                        <label>Categoria</label>
                        <select name="category" class="btn btn-default dropdown-btn"
                                style="padding: 8px 5px; background-color: white;">
                            <option value="habitacional">Habitacional</option>
                            <option value="comercial">Comercial</option>
                            <option value="corporativa">Corporativa</option>
                            <option value="terrenos">Terrenos</option>
                        </select>
                        @foreach($errors->get('category') as $error)
                            <span style="color: red; margin: 10px;">{{ $error }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="formField">
                        <label>Tipo</label>
                        <select name="type" class="btn btn-default dropdown-btn"
                                style="padding: 8px 5px; background-color: white;">
                            <option value="house">Casa</option>
                            <option value="depto">Depto.</option>
                            <option value="ground">Terrno</option>
                        </select>
                        @foreach($errors->get('type') as $error)
                            <span style="color: red; margin: 10px;">{{ $error }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            <p class="help-block">Debes arrastrar el marcador a la posición de la propiedad.</p>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="form-group">
                        <label>Habitaciones</label>
                        <input type="text" class="form-control" name="bedrooms" value="{{ old('bedrooms') }}">
                        @foreach($errors->get('bedrooms') as $error)
                            <span style="color: red; margin: 10px;">{{ $error }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="form-group">
                        <label>Baños</label>
                        <input type="text" class="form-control" name="bathrooms" value="{{ old('bathrooms') }}">
                        @foreach($errors->get('bathrooms') as $error)
                            <span style="color: red; margin: 10px;">{{ $error }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="form-group">
                        <label>Area</label>
                        <div class="input-group">
                            <input class="form-control" type="text" name="ground" value="{{ old('ground') }}">
                            <div class="input-group-addon">m<sup>2</sup></div>
                        </div>
                        @foreach($errors->get('ground') as $error)
                            <span style="color: red; margin: 10px;">{{ $error }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="btn-group">
                        <label>Operacion</label>
                        <div class="clearfix"></div>
                        <a href="#" data-toggle="dropdown" class="btn btn-default dropdown-toggle">
                            <span class="dropdown-label">VENTA</span>&nbsp;&nbsp;&nbsp;
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-select">
                            <li class="active">
                                <input type="radio" name="operation" checked="checked" value="for_sale">
                                <a href="#">VENTA</a>
                            </li>
                            <li>
                                <input type="radio" name="operation" value="for_rent">
                                <a href="#">RENTA</a>
                            </li>
                        </ul>
                        @foreach($errors->get('operation') as $error)
                            <span style="color: red; margin: 10px;">{{ $error }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <label>Imagenes</label>
                        <input type="file" name="images[]" class="file" multiple data-show-upload="false"
                               data-show-caption="false"
                               data-show-remove="false" accept="image/jpeg,image/png"
                               data-browse-class="btn btn-o btn-default" data-browse-label="Seleccionar Imagenes">
                        <p class="help-block">Pudes seleccionar miltiples imagenes a la vez</p>
                        @foreach($errors->get('images.*') as $error)
                            @foreach($error as $msg)
                                <span style="color: red; margin: 10px;">{{ $msg }}</span>
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label>Amenidades</label>
                        <div class="checkbox custom-checkbox">
                            <label>
                                <input type="checkbox" value="garage" name="amenities[]">
                                <span class="fa fa-check"></span> Cochera
                            </label>
                        </div>
                        <div class="checkbox custom-checkbox">
                            <label>
                                <input type="checkbox" value="security" name="amenities[]">
                                <span class="fa fa-check"></span> Seguridad
                            </label>
                        </div>
                        <div class="checkbox custom-checkbox">
                            <label>
                                <input type="checkbox" value="aire_conditioner" name="amenities[]">
                                <span class="fa fa-check"></span> Aire Acondicionado
                            </label>
                        </div>
                        <div class="checkbox custom-checkbox">
                            <label>
                                <input type="checkbox" value="balcony" name="amenities[]">
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
                                <input type="checkbox" value="pool" name="amenities[]">
                                <span class="fa fa-check"></span> Alberca
                            </label>
                        </div>
                        <div class="checkbox custom-checkbox">
                            <label>
                                <input type="checkbox" value="internet" name="amenities[]">
                                <span class="fa fa-check"></span> Internet
                            </label>
                        </div>
                        <div class="checkbox custom-checkbox">
                            <label>
                                <input type="checkbox" value="heating" name="amenities[]">
                                <span class="fa fa-check"></span> Heating
                            </label>
                        </div>
                        <div class="checkbox custom-checkbox">
                            <label>
                                <input type="checkbox" value="cable" name="amenities[]">
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
                                <input type="checkbox" value="garden" name="amenities[]">
                                <span class="fa fa-check"></span> Jardin
                            </label>
                        </div>
                        <div class="checkbox custom-checkbox">
                            <label>
                                <input type="checkbox" value="phone" name="amenities[]">
                                <span class="fa fa-check"></span> Telefono
                            </label>
                        </div>
                        <div class="checkbox custom-checkbox">
                            <label>
                                <input type="checkbox" value="fireplace" name="amenities[]">
                                <span class="fa fa-check"></span> Chimenea
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <a href="#" class="btn btn-green btn-lg" onclick="$('#newProperty').submit();">Guardar Propiedad</a>
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
    <script>
        $('select[name=state]').change(function () {
            var $this = $(this);
            $('select[name=city]').html('');
            $.post('/api/state/getCities', {'state': $this.val()})
                .done(function (data) {
                    $.each(data, function (k, val) {
                        $('select[name=city]').append('<option value="' + k + '">' + val + '</option>');
                    });
                });
        });
    </script>
    <script src="{!! asset('js/json2.js') !!}"></script>
    <script src="{!! asset('js/underscore.js') !!}"></script>
    <script src="{!! asset('js/moment-2.5.1.js') !!}"></script>
    <script src="{!! asset('js/jquery.visible.js') !!}"></script>
    <script src="{!! asset('js/clndr.js') !!}"></script>
    <script src="{!! asset('js/fileinput.min.js') !!}"></script>
    <script src="{!! asset('js/calendar.js') !!}"></script>
@endsection