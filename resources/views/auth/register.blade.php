@extends('layouts.app')

@section('content')
    <div class="contenedor">
        <div class="forms-container">
            <div class="signin register">
                <form method="POST" class="sign-in-form" action="{{ route('register') }}">
                    @csrf
                    <h2 class="title">Registro</h2>
                    <div class="input-field">
                        <i class="far fa-id-card"></i>
                        <input id="num_documento" type="number"
                            class="form-control @error('numero_identificacion') is-invalid @enderror" name="num_documento"
                            value="{{ old('num_documento') }}" autocomplete="num_documento" autofocus
                            placeholder="Número identificación" />
                    </div>
                    @error('numero_identificacion')
                        <div class="col-12">
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror

                    <div class="input-field">
                        <i class="fas fa-id-card-alt"></i>
                        <select class="form-select @error('tipodocumento_id') is-invalid @enderror"
                            name="tipo_identificacion" id="tipo_identificacion">
                            <option value="" disabled selected>Seleccione su tipo de identificación</option>
                            @foreach ($tipoIdentificacion as $tipoIdent)
                                <option value="{{ $tipoIdent->id }}">
                                    {{ $tipoIdent->nombre_tipo_identificacion }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('tipodocumento_id')
                        <div class="col-12">
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror

                    <div class="input-field">
                        <i class="fas fa-users"></i>
                        <select class="form-select @error('tipousuario_id') is-invalid @enderror" name="tipo_usuario"
                            id="tipo_usuario">
                            <option value="" disabled selected>Seleccione su tipo de usuario</option>
                            @foreach ($tipoUsuario as $tipoUsu)
                                <option value="{{ $tipoUsu->id }}">
                                    {{ $tipoUsu->nombre_tipo_usuario }}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('tipousuario_id')
                        <div class="col-12">
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror"
                            name="nombre" value="{{ old('nombre') }}" autocomplete="nombre" placeholder="Nombre">
                    </div>
                    @error('nombre')
                        <div class="col-12">
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror"
                            name="apellido" value="{{ old('apellido') }}" placeholder="Apellidos"
                            autocomplete="apellido">
                    </div>
                    @error('apellido')
                        <div class="col-12">
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror

                    <div class="input-field">
                        <i class="fas fa-transgender-alt"></i>
                        <select class="form-select @error('sexo') is-invalid @enderror" name="sexo" id="sexo">
                            <option value="" disabled selected>Seleccione su sexo</option>
                            <option value="0">Femenino</option>
                            <option value="1">Masculino</option>
                        </select>
                    </div>
                    @error('sexo')
                        <div class="col-12">
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror

                    <div class="input-field">
                        <i class="far fa-compass"></i>
                        <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror"
                            name="direccion" value="{{ old('direccion') }}" autocomplete="direccion"
                            placeholder="Dirección">
                    </div>
                    @error('direccion')
                        <div class="col-12">
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror

                    <div class="input-field">
                        <i class="fas fa-phone-alt"></i>
                        <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror"
                            name="telefono" value="{{ old('telefono') }}" autocomplete="telefono" placeholder="Teléfono">
                    </div>
                    @error('telefono')
                        <div class="col-12">
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror

                    <div class="input-field">
                        <i class="fas fa-mobile-alt"></i>
                        <input id="celular1" type="text" class="form-control @error('celular1') is-invalid @enderror"
                            name="celular1" value="{{ old('celular1') }}" autocomplete="celular1"
                            placeholder="Celular 1">
                    </div>
                    @error('celular1')
                        <div class="col-12">
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror

                    <div class="input-field">
                        <i class="fas fa-mobile-alt"></i>
                        <input id="celular2" type="text" class="form-control @error('celular2') is-invalid @enderror"
                            name="celular2" value="{{ old('celular2') }}" autocomplete="celular2"
                            placeholder="Celular 2">
                    </div>
                    @error('celular2')
                        <div class="col-12">
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror

                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" autocomplete="email"
                            placeholder="Correo electrónico">
                    </div>
                    @error('email')
                        <div class="col-12">
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror

                    <div class="input-field">
                        <i class="fas fa-key"></i>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" autocomplete="new-password" placeholder="Contraseña">
                    </div>
                    @error('password')
                        <div class="col-12">
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror

                    <div class="input-field">
                        <i class="fas fa-key"></i>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            autocomplete="new-password" placeholder="Confirmar contraseña">
                    </div>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <select class="form-select @error('estado_usuario') is-invalid @enderror" name="estado" id="estado">
                            <option value="" disabled selected>Seleccione su estado</option>
                            <option value="0">Activo</option>
                            <option value="1">Desactivo</option>
                        </select>
                    </div>
                    @error('estado_usuario')
                        <div class="col-12">
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                        </div>
                    @enderror

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Registrarme') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                {{-- <img src="img_Incio_Sesion\log.svg" class="image" alt="" /> --}}
            </div>
        </div>
    </div>
@endsection
