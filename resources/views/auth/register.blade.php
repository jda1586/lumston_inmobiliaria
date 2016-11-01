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
                <form role="form" id="form_register" method="post" action="{!! route('auth.create') !!}">
                    {{ csrf_field() }}
                    <div class="form-group {!! $errors->has('firstName') ? 'has-error':'' !!}">
                        <input name="firstName" type="text" placeholder="Nombre" class="form-control"
                               value="{!! old('firstName') !!}">
                        @foreach($errors->get('firstName') as $error)
                            <p class="help-block">{{ $error }}</p>
                        @endforeach
                    </div>
                    <div class="form-group {!! $errors->has('lastName') ? 'has-error':'' !!}">
                        <input name="lastName" type="text" placeholder="Apellido" class="form-control"
                               value="{!! old('lastName') !!}">
                        @foreach($errors->get('lastName') as $error)
                            <p class="help-block">{{ $error }}</p>
                        @endforeach
                    </div>
                    <div class="form-group {!! $errors->has('email') ? 'has-error':'' !!}">
                        <input name="email" type="text" placeholder="Email" class="form-control"
                               value="{!! old('email') !!}">
                        @foreach($errors->get('email') as $error)
                            <p class="help-block">{{ $error }}</p>
                        @endforeach
                    </div>
                    <div class="form-group {!! $errors->has('password') ? 'has-error':'' !!}">
                        <input name="password" type="password" placeholder="Contraseña" class="form-control">
                        @foreach($errors->get('password') as $error)
                            <p class="help-block">{{ $error }}</p>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <input name="password_confirmation" type="password" placeholder="Confirmar" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="btn-group-justified">
                            <a href="#" class="btn btn-lg btn-green"
                               onclick="document.getElementById('form_register').submit(); return false;">
                                Crear cuenta
                            </a>
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