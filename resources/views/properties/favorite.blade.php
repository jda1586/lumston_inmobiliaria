@extends('layouts._main')

@section('title','Propiedades')

@section('content')
    <div class="resultsList">
        <h4>Mis Favoritos</h4>
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
        var price_set = [0, 0];
        var price_limit = [0, 0];

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
            markerIcon: "{{ $property->status == 'active'?"marker-blue.png":($property->status == 'disable'?"marker-yellow.png":"marker-new.png") }}",
        },
            @endforeach
        ];

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

        var URL_PROPERTIES = "{!! route('properties.index') !!}";
        var event = true;
    </script>
    @parent
    <script src="/js/download_pdf.js" type="text/javascript"></script>
    <script src="/js/properties.box.js" type="text/javascript"></script>
@endsection