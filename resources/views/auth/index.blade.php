@extends('layouts._page')

@section('content')

    <div class="row">
        <div class="col-lg-7 col-md-7 hidden-sm hidden-xs">

        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
            @if(session('error'))
            <div class="alert alert-warning alert-dismissible fade in" role="alert">
                <div class="icon"><span class="fa fa-warning"></span></div>
                <button type="button" class="close" data-dismiss="alert">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
                <strong>Ups!</strong> {{ session('error') }}
            </div>
            @endif


            <div class="modal-header">
                <h4 class="modal-title" id="signinLabel">Ingresar</h4>
            </div>
            <div class="modal-body">
                <form role="form" action="{!! route('auth.login') !!}" method="post" id="form_login">
                    {{ csrf_field() }}

                    <div class="form-group {!! $errors->has('email') ? 'has-error':'' !!}">
                        <input name="email" type="text" placeholder="Email" class="form-control">
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
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="checkbox custom-checkbox">
                                    <label>
                                        <input name="keep" type="checkbox" value="1">
                                        <span class="fa fa-check"></span> Recordarme
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-6 align-right">
                                <p class="help-block">
                                    <a href="#" class="text-green">Olvidaste tu contraseña?</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="btn-group-justified">
                            <a href="#" class="btn btn-lg btn-green"
                               onclick="document.getElementById('form_login').submit(); return false;">
                                Ingresar
                            </a>
                        </div>
                    </div>
                    <p class="help-block">Aun no eres miembro?
                        <a href="{!! route('auth.register') !!}" class="text-green">Registrate</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection