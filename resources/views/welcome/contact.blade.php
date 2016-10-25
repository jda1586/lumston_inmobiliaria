@extends('layouts._page')

@section('content')
    <div class="home-wrapper" style="margin-top: 84px;">
        <div class="home-content">
            Contacto
        </div>
    </div>
@endsection

@section('_footer')
    <script>
        var price_limit = [];
        var price_set = price_limit;
        var URL_PROPERTIES = "{!! route('properties.index') !!}";
    </script>
    @parent
@endsection