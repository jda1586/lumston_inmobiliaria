@extends('layouts._page')

@section('content')
    <h2 class="osLight">Contacto</h2>
    <div class="row">
        <div class="col-lg-10 col-md-10 col-md-offset-1">
            <div class="col-md-4 col-lg-4 col-xs-4 col-sm-4 col-md-">
                <div class="row">
                    <div class="col-md-3 col-lg-3 hidden-sm hidden-xs">
                        <i class="fa fa-mobile fa-5x"></i>
                    </div>
                    <div class="col-md-9 col-lg-9 hidden-sm hidden-xs">
                        <h4><b>Telefono</b></h4>
                        <p style="font-size: medium;">(33) 3166 5792</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-4 col-sm-4">
                <div class="row">
                    <div class="col-md-4 col-lg-4 hidden-sm hidden-xs">
                        <i class="fa fa-envelope fa-5x"></i>
                    </div>
                    <div class="col-md-8 col-lg-8 hidden-sm hidden-xs">
                        <h4><b>Correo</b></h4>
                        <p style="font-size: medium;">contacto@ofarril.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-4 col-sm-4">
                <div class="row">
                    <div class="col-md-3 col-lg-3 hidden-sm hidden-xs">
                        <i class="fa fa-map-marker fa-5x" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-9 col-lg-9 hidden-sm hidden-xs">
                        <h4><b>Oficinas</b></h4>
                        <p style="font-size: medium;">Francisco Zarco #2392</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-6 col-lg-6 hidden-sm hidden-xs">
            {{--MAPA--}}
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.5720634738927!2d-103.37858588550199!3d20.686982086184496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae3e017f3441%3A0x3db2f727f79eb019!2sCalle+Francisco+Zarco+2392%2C+Ladr%C3%B3n+de+Guevara%2C+Ladron+De+Guevara%2C+44600+Guadalajara%2C+Jal.!5e0!3m2!1ses-419!2smx!4v1478721469860"
                    width="540" height="426" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
            <form role="form" action="#" method="post" id="contact_login">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Nombre</label>
                    <input name="name" type="text" placeholder="" class="form-control">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Telefono</label>
                            <input name="phone" type="text" placeholder="" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label>Correo</label>
                            <input name="email" type="text" placeholder="" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Mensaje</label>
                    <textarea name="msg" class="form-control" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <div class="btn-group-justified">
                        <a href="#" class="btn btn-lg btn-green"
                           onclick="document.getElementById('contact_login').submit(); return false;">
                            Enviar
                        </a>
                    </div>
                </div>
            </form>
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