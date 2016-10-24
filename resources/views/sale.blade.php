@extends('layouts._welcome')



@section('_footer')
    <script>
        var price_limit = [{!! $price_limit[0] !!},{!! $price_limit[1] !!}];
        var price_set = price_limit;
        var URL_PROPERTIES = "{!! route('properties.index') !!}";
    </script>
    @parent
@endsection