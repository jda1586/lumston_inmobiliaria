@extends('layouts._page')

@section('content')
    <div class="home-wrapper" style="margin-top: 84px;">
        <div class="home-content">
            <h2 class="osLight">Opcionar tu propiedad</h2>
            <p>
                Realizamos un diagnóstico jurídico y fiscal de su propiedad previo a su comercialización. Con la
                finalidad de brindarle mayor seguridad jurídica a nuestros clientes.
            </p>
            <p>
                Promocionamos su inmueble en medios digitales en las páginas de internet inmobiliarias más frecuentadas
                del país y hacemos carteles diseñados con la finalidad de que llamen la atención de posibles
                interesados. ¿Sabías que el 80% de las personas investigan en medios digitales antes de comprar
                inmuebles?
            </p>
            <p>
                Promocionamos su propiedad trabajando en equipo y apoyándonos con diversas inmobiliarias y agentes
                inmobiliarios independientes, por lo cual, ellos también podrán promocionar su propiedad, sin embargo,
                las visitas que se programen, los ofrecimientos y todo lo necesario para el cierre de la operación, será
                a través de nosotros.
            </p>
            <p>
                Le asignamos un asesor responsable del seguimiento de su propiedad, sin embargo cualquier miembro del
                equipo que le conteste en la oficina podrá apoyarle con cualquier pregunta o duda de su propiedad
            </p>
            <p>
                Le asesoramos para una óptima negociación a un precio justo y razonable.
            </p>
            <p>
                Le asesoramos sobre todos los ofrecimientos que reciba por personas interesadas en su propiedad
            </p>
            <p>
                Contamos con el apoyo legal en caso necesario, a través de un despacho profesional de abogados, a
                quienes le podemos recomendar ampliamente
            </p>
            <p>
                Recibirá en su correo los días 15 y 30 de cada mes el reporte de las llamadas, visitas, ofrecimientos
                y/o comentarios que realicen las personas a las que les mostremos su propiedad.
            </p>
            <p>
                Anticipamos el cálculo de impuestos, ofreciéndole estrategias que pudieran optimizarlos.
            </p>
            <p>
                Recomendamos un valuador certificado para tener una referencia más certera del precio y valor de su
                propiedad.
            </p>
            <p>
                Tomamos fotos de buena calidad y ángulos que hagan ver su propiedad más atractiva.
            </p>
            <p>
                Tenemos personas de confianza que le podemos recomendar para realizar mejoras a su propiedad, con la
                finalidad de que sea más atractiva para los posibles compradores, arrendadores o inversionistas. Por
                ejemplo: albañiles, pintores, impermeabilizantes, alumineros, etc.
            </p>
            <p>
                Protegemos sus datos personales e identidad. Los interesados en comprar/arrendar su propiedad no tendrán
                conocimiento de que usted es el propietario del inmueble, sino hasta la celebración del contrato.
                Nosotros nos convertimos en su representante y aseguramos que los ofrecimientos sean legales y serios.
            </p>
            <p>
                En caso de RENTA, hacemos una investigación del inquilino interesado.
            </p>
            <p>
                En caso de RENTA, recomendamos ratificar las firmas del contrato en notaría, nosotros por convenio
                ofrecemos a nuestros clientes un precio fijo muy accesibles ya sea para personas físicas o morale
            </p>
            <p>
                Asistimos a la firma con el cliente, asegurándonos de cerrar la operación de compraventa/arrendamiento.
            </p>
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