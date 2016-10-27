@extends('layouts._page')

@section('content')
    Contacto
@endsection

@section('_footer')
    <script>
        var price_limit = [];
        var price_set = price_limit;
        var URL_PROPERTIES = "{!! route('properties.index') !!}";
    </script>
    @parent
@endsection