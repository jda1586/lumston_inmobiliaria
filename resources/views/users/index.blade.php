@extends('layouts._main')

@section('content')
    <div class="singleTop whiteBg">
        <div class="row mb20">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pb20">
                <div class="row">
                    <div class="col-xs-3">
                        {{--<div class="pc-email">
                            <a href="#" class="btn btn-icon btn-round btn-o btn-magenta btn-sm">
                                <span class="fa fa-envelope-o"></span>
                            </a>
                        </div>--}}
                    </div>
                    <div class="col-xs-6">
                        <div class="profile-card">
                            <div class="pc-avatar"><img src="/images/avatar-1.png" alt="avatar"></div>
                            <div class="pc-name">{{ $user->name }}</div>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        {{--<div class="pc-fav">
                            <a href="#" class="btn btn-icon btn-round btn-o btn-red btn-sm">
                                <span class="fa fa-heart-o"></span>
                            </a>
                        </div>--}}
                    </div>
                </div>
                <ul class="pc-stats">
                    <li><span>280</span>Prop. Vistas</li>
                    <li><span>345</span>Prop. Favoritas</li>
                    <li><span>36</span>Agentes</li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pb20">
                <div class="pc-title osLight">Informacion de Contacto</div>
                <div class="row pb10">
                    <div class="col-xs-4"><strong>Telefono</strong></div>
                    <div class="col-xs-8 align-right edit_field" data-field="phone">(123) 456 789</div>
                </div>
                <div class="row pb10">
                    <div class="col-xs-4"><strong>Mobile</strong></div>
                    <div class="col-xs-8 align-right edit_field" data-field="mobile">888 123 456 789</div>
                </div>
                <div class="row pb10">
                    <div class="col-xs-4"><strong>Email</strong></div>
                    <div class="col-xs-8 align-right">
                        <a href="mailto:#" class="text-green">{{ $user->email }}</a>
                    </div>
                </div>
                {{--<div class="row pb10">
                    <div class="col-xs-4"><strong>Skype</strong></div>
                    <div class="col-xs-8 align-right">-</div>
                </div>--}}
                {{--<div class="pc-social">
                    <a href="#" class="btn btn-icon btn-facebook">
                        <span class="fa fa-facebook"></span>
                    </a>
                    <a href="#" class="btn btn-icon btn-twitter">
                        <span class="fa fa-twitter"></span>
                    </a>
                    <a href="#" class="btn btn-icon btn-google">
                        <span class="fa fa-google-plus"></span>
                    </a>
                    <a href="#" class="btn btn-icon btn-pinterest">
                        <span class="fa fa-pinterest"></span>
                    </a>
                </div>--}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 pb20">
                <div class="pc-about osLight">Sobre mi</div>
                <div class="pb20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus. Phasellus mollis imperdiet placerat.</div>
                {{--<div class="pc-about osLight">What others said about me</div>
                <div id="testimonials" class="carousel slide carousel-wb mb20" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#testimonials" data-slide-to="0" class="active"></li>
                        <li data-target="#testimonials" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="/images/avatar-2.png" class="testim-avatar" alt="avatar">
                            <div class="testim">
                                <div class="testim-text">Fusce risus metus, placerat in consectetur eu, porttitor a est sed sed dolor lorem cras adipiscing</div>
                                <div class="testim-name">Jane Smith</div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="/images/avatar-3.png" class="testim-avatar" alt="avatar">
                            <div class="testim">
                                <div class="testim-text">Fusce risus metus, placerat in consectetur eu, porttitor a est sed sed dolor lorem cras adipiscing</div>
                                <div class="testim-name">Rust Cohle</div>
                            </div>
                        </div>
                    </div>
                </div>--}}
            </div>
            <div class="col-md-6">
                <div class="pc-title osLight">Envia un mensaje</div>
                <form role="form">
                    {{--<div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                    </div>--}}
                    {{--<div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                    </div>--}}
                    <div class="form-group">
                        <textarea class="form-control" id="message" rows="3" placeholder="Envia un mensaje, una sugerencia o pide ayuda..."></textarea>
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