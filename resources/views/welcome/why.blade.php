@extends('layouts._page')

@section('content')
    <h2 class="osLight">¿Por qué nosotros?</h2>
    <p>
        Trabajamos en equipo y nos apoyamos con diversas inmobiliarias y asesores independientes para tener un
        catálogo más amplio y encontrar la propiedad ideal para nuestros clientes.
    </p>
    <p>
        Nos encargamos de organizar tours de visita de propiedades que cumplan con los requerimientos y
        necesidades de nuestros clientes, con la finalidad de eficientar los tiempos y sea más fácil elegir y
        comparar las propiedades visitadas.
    </p>
    <p>
        Asesoramos a nuestros clientes para tener una óptima negociación para llegar a un precio justo y
        razonable.
    </p>
    <p>
        Contamos con el apoyo legal en caso necesario, a través de un despacho profesional de abogados, a
        quienes recomendamos ampliamente.
    </p>
    <p>
        Asesoramos a nuestros clientes en realización de ofrecimientos de compraventa o arrendamiento
    </p>
    <p>
        Le asignamos un asesor responsable de su búsqueda, sin embargo, cualquier miembro del equipo que le
        conteste en la oficina podrá apoyarle con cualquier pregunta accediendo a su expediente
    </p>
    <p>
        Protegemos sus datos personales e identidad, verificando que las propiedades sean formales y serias
    </p>
@endsection

@section('_footer')
    <script>
        var price_limit = [];
        var price_set = price_limit;
        var URL_PROPERTIES = "{!! route('properties.index') !!}";
    </script>
    @parent
@endsection