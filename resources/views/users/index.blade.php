@extends('layouts._main')

@section('content')
    <div class="singleTop whiteBg">
        <div class="row mb20">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pb20">
                <div class="row pc-title osLight" style="text-align: center;">
                    <i class="fa fa-user"></i>
                    {{ auth()->user()->first_name.' '.auth()->user()->last_name }}
                </div>
                <div class="row">
                    <div class="col-xs-12" style="text-align: center; font-size: x-large;">

                        <div class="row" style="margin-top: 20px;">
                            <div class="col-md-6">
                                <i class="fa fa-home" style="color: #2C467F;"></i> 280
                                <p style="font-size: 15px;">Prop. Vistas</p>
                            </div>
                            <div class="col-md-6">
                                <i class="fa fa-heart" style="color: red;"></i> 345
                                <p style="font-size: 15px;">Favoritos</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pb20">
                <div class="pc-title osLight">Informacion de Contacto</div>
                <div class="row pb10">
                    <div class="col-xs-4"><strong>Telefono</strong></div>
                    <div class="col-xs-8 align-right edit_field" data-field="phone">
                        <i class="fa fa-pencil"></i>
                        (123) 456 789
                    </div>
                </div>
                <div class="row pb10">
                    <div class="col-xs-4"><strong>Mobile</strong></div>
                    <div class="col-xs-8 align-right edit_field" data-field="mobile">
                        <i class="fa fa-pencil"></i>
                        888 123 456 789
                    </div>
                </div>
                <div class="row pb10">
                    <div class="col-xs-4"><strong>Email</strong></div>
                    <div class="col-xs-8 align-right">
                        <a href="mailto:#" class="text-green">{{ $user->email }}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb20">
            <div class="col-md-12">
                <div class="pc-title osLight">Envianos un mensaje</div>
                <form role="form">
                    <div class="form-group">
                        <textarea class="form-control" id="message" rows="3"
                                  placeholder="Envia un mensaje, una sugerencia o pide ayuda..."></textarea>
                    </div>
                    <a href="#" class="btn btn-green">Enviar</a>
                </form>
            </div>
        </div>

    </div>
    <div class="rightContainer">
        <h3>Vistas recientemente</h3>
        <div class="row">
            @each('properties.partials.box',$recently,'property')
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
@endsection

@section('_footer')
    <script>
        var price_set = [0, 0];
        var price_limit = [0, 0];
        ;
        var _latitude;
        var _longitude
        var _props = [@foreach($recently as $property)
        {
            id: {{ $property->id }},
            title: "{{ $property->details->title }}",
            image: '{!! $property->images->first()->system == 'URL' ? asset($property->images->first()->path):Storage::disk('public')->url($property->images->first()->path) !!}',
            type: '{{ trans('search.'.$property->operation) }}',
            price: '${{ number_format($property->price, 2, '.',',') }}',
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
        @if(isset($city) && $city->id > 0)
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
@endsection