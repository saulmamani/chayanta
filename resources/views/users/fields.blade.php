
            {!! csrf_field() !!}

            <div class="form-group col-sm-6 has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group col-sm-6 has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" name="password" placeholder="Password">

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group col-sm-6 has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar password">

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>

            <hr>
            <div class="form-group col-sm-6 has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nombre Completo">

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group col-sm-6 has-feedback{{ $errors->has('cargo') ? ' has-error' : '' }}">
                <input type="text" class="form-control" name="cargo" value="{{ old('cargo') }}" placeholder="Cargo">

                @if ($errors->has('cargo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cargo') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group col-sm-6">
                <select name="rol" class="form-control">
                    <option value="Administrador">Administrador</option>
                    <option value="Secretaria">Secretaria</option>
                </select>

            </div>

            <div class="row col-sm-6">
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Aceptar</button>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <a href="{{ route('users.index') }}" class="btn btn-default">Cancelar</a>
                </div>
            </div>