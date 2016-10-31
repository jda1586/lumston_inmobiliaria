<div class="modal fade" id="signin" role="dialog" aria-labelledby="signinLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="row">
                <div class="col-lg-7 col-md-7 hidden-sm hidden-xs">

                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="modal-header">
                        <h4 class="modal-title" id="signinLabel">Ingresar</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" action="{!! route('auth.login') !!}" method="post" id="form_login">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input name="email" type="text" placeholder="Email" class="form-control">
                            </div>
                            <div class="form-group">
                                <input name="password" type="password" placeholder="Contraseña" class="form-control">
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
                                <a href="#" class="modal-su text-green">Registrate</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>