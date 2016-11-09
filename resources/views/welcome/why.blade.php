@extends('layouts._page')

@section('content')
    <div class="row align-center" style="margin-bottom: 50px;">
        <h1 style="color: #2C467F;">¿Por qué nosotros?</h1>
    </div>
    <div class="row" style="margin-bottom: 50px;">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div style="margin-bottom: 20px; padding: 10px;">
                <i class="fa fa-users fa-4x" aria-hidden="true" style="color: #2C467F; float: left;"></i>
                <span style="font-size: x-large; margin-left: 20px;">Trabajo en Equipo</span>
            </div>
            <div style="padding: 10px;">
                Trabajamos en equipo y nos apoyamos con diversas inmobiliarias y asesores independientes para tener un
                catálogo más amplio y encontrar la propiedad ideal para nuestros clientes.
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div style="margin-bottom: 20px; padding: 10px;">
                <i class="fa fa-flag fa-4x" aria-hidden="true" style="color: #2C467F; float: left;"></i>
                <span style="font-size: x-large; margin-left: 20px;">Tours</span>
            </div>
            <div style="padding: 10px;">
                Nos encargamos de organizar tours de visita de propiedades que cumplan con los requerimientos y
                necesidades de nuestros clientes, con la finalidad de eficientar los tiempos y sea más fácil elegir y
                comparar las propiedades visitadas.
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div style="margin-bottom: 20px; padding: 10px;">
                <i class="fa fa-handshake-o fa-4x" aria-hidden="true" style=" color: #2C467F;float: left;"></i>
                <span style="font-size: x-large; margin-left: 20px;">Óptima negociación</span>
            </div>
            <div style="padding: 10px;">
                Asesoramos a nuestros clientes para tener una óptima negociación para llegar a un precio justo y
                razonable.
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div style="margin-bottom: 20px; padding: 10px;">
                <i class="fa fa-gavel fa-4x" aria-hidden="true" style=" color: #2C467F;float: left;"></i>
                <span style="font-size: x-large; margin-left: 20px;">Apoyo legal</span>
            </div>
            <div style="padding: 10px;">
                Contamos con el apoyo legal en caso necesario, a través de un despacho profesional de abogados, a
                quienes recomendamos ampliamente.
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div style="margin-bottom: 20px; padding: 10px;">
                <i class="fa fa-user-circle fa-4x" aria-hidden="true" style="color: #2C467F; float: left;"></i>
                <span style="font-size: x-large; margin-left: 20px;">Asesor asignado</span>
            </div>
            <div style="padding: 10px;">
                Le asignamos un asesor responsable de su búsqueda, sin embargo, cualquier miembro del equipo que le
                conteste en la oficina podrá apoyarle con cualquier pregunta accediendo a su expediente
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div style="margin-bottom: 20px; padding: 10px;">
                <i class="fa fa-shield fa-4x" aria-hidden="true" style="color: #2C467F; float: left;"></i>
                <span style="font-size: x-large; margin-left: 20px;">Protegemos sus datos</span>
            </div>
            <div style="padding: 10px;">
                Protegemos sus datos personales e identidad, verificando que las propiedades sean formales y serias
            </div>
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