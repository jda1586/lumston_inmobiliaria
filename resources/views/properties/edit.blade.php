@extends('layouts._main')

@section('_header')
    @parent
    <link href="{!! asset('css/fileinput.min.css') !!}" rel="stylesheet">
@endsection

@section('content')
    <div class="rightContainer">
        <h1>Editar Propiedad</h1>
        <form id="newProperty" role="form" method="post"
              action="{!! route('properties.update',['id' => $property->id]) !!}"
              enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="form-group">
                        <label>Titulo</label>
                        <input type="text" class="form-control" name="title" value="{{ $property->details->title }}">
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
                            <input class="form-control" type="text" name="price" value="{{ $property->price }}">
                        </div>
                        @foreach($errors->get('price') as $error)
                            <span style="color: red; margin: 10px;">{{ $error }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Descripcion</label>
                <textarea class="form-control" rows="4"
                          name="description">{{ $property->details->description }}</textarea>
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
                                <option value="{!! $state->id !!}" {!! $state->id == $property->state_id?'selected':'' !!}>{{ $state->name }}</option>
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
                            @foreach($property->state->cities as $city)
                                <option value="{!! $city->id !!}" {!! $city->id == $property->city_id?'selected':'' !!}>{{ $city->name }}</option>
                            @endforeach
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
                               value="{{ $property->address }}">
                        @foreach($errors->get('address') as $error)
                            <span style="color: red; margin: 10px;">{{ $error }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
                    <div class="form-group">
                        <label>No. Exterior</label>
                        <input class="form-control" type="text" name="outside" autocomplete="off"
                               value="{{ $property->outside_number }}">
                        @foreach($errors->get('outside') as $error)
                            <span style="color: red; margin: 10px;">{{ $error }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-6">
                    <div class="form-group">
                        <label>No. Interior</label>
                        <input class="form-control" type="text" name="inside" autocomplete="off"
                               value="{{ $property->inside_number }}">
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
                        <input type="text" class="form-control" name="suburb" value="{{ $property->suburb }}">
                        @foreach($errors->get('suburb') as $error)
                            <span style="color: red; margin: 10px;">{{ $error }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Codigo Postal</label>
                        <input type="text" class="form-control" name="postalCode" value="{{ $property->postal_code }}">
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
                               value="{{ $property->latitude }}">
                        @foreach($errors->get('latitude') as $error)
                            <span style="color: red; margin: 10px;">{{ $error }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                    <label>Longitude</label>
                    <input type="text" name="longitude" id="longitude" class="form-control" readonly
                           value="{{ $property->longitude }}">
                    @foreach($errors->get('longitude') as $error)
                        <span style="color: red; margin: 10px;">{{ $error }}</span>
                    @endforeach
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="formField">
                        <label>Categoria</label>
                        <select name="category" class="btn btn-default dropdown-btn"
                                style="padding: 8px 5px; background-color: white;">
                            <option value="habitacional" {!! $property->category == 'habitacional'?'selected':'' !!}>
                                Habitacional
                            </option>
                            <option value="comercial" {!! $property->category == 'comercial'?'selected':'' !!}>
                                Comercial
                            </option>
                            <option value="corporativa" {!! $property->category == 'corporativa'?'selected':'' !!}>
                                Corporativa
                            </option>
                            <option value="terrenos" {!! $property->category == 'terrenos'?'selected':'' !!}>
                                Terrenos
                            </option>
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
                            <option value="house" {!! $property->type == 'house'?'selected':'' !!}>Casa</option>
                            <option value="depto" {!! $property->type == 'depto'?'selected':'' !!}>Depto.</option>
                            <option value="ground" {!! $property->type == 'ground'?'selected':'' !!}>Terrno</option>
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
                        <input type="text" class="form-control" name="bedrooms" value="{{ $property->bedrooms }}">
                        @foreach($errors->get('bedrooms') as $error)
                            <span style="color: red; margin: 10px;">{{ $error }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="form-group">
                        <label>Baños</label>
                        <input type="text" class="form-control" name="bathrooms" value="{{ $property->bathrooms }}">
                        @foreach($errors->get('bathrooms') as $error)
                            <span style="color: red; margin: 10px;">{{ $error }}</span>
                        @endforeach
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="form-group">
                        <label>Area</label>
                        <div class="input-group">
                            <input class="form-control" type="text" name="ground"
                                   value="{{ $property->details->ground }}">
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
                                <input type="radio" name="operation"
                                       value="for_sale" {!! $property->operation == 'for_sale'?'checked="checked"':'' !!}>
                                <a href="#">VENTA</a>
                            </li>
                            <li>
                                <input type="radio" name="operation"
                                       value="for_rent" {!! $property->operation == 'for_rent'?'checked="checked"':'' !!}>
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Imagenes actuales</label>
                        <div class="img-preview">
                            @foreach($property->images as $image)
                                <div class="img-preview-content" data-value="{{ $image->id }}">
                                    <img src="{!! $image->system == 'URL' ? asset($image->path):Storage::disk('public')->url($image->path) !!}">
                                    <i class="fa fa-close"></i>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                        <label>Subir imagenes</label>
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
        var _latitude =  {{ $property->latitude }};
        var _longitude = {{ $property->longitude }};
        var _props = [];

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