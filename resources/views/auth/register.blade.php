@extends('layouts._page')

@section('content')
    <div class="row">
        <div class="col-lg-7 col-md-7 hidden-sm hidden-xs">

        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
            <div class="modal-header">
                <h4 class="modal-title" id="signupLabel">Registrate</h4>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <input type="text" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Apellido" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Contraseña" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Confirmar" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="btn-group-justified">
                            <a href="#" class="btn btn-lg btn-green">Crear cuenta</a>
                        </div>
                    </div>
                    <p class="help-block">
                        Ya eres miembro?
                        <a href="{!! route('auth.index') !!}" class="text-green">Ingresar</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection