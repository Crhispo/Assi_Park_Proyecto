@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Registro') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="num_documento"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Número de documento') }}</label>

                                <div class="col-md-6">
                                    <input id="num_documento" type="text"
                                        class="form-control @error('num_documento') is-invalid @enderror"
                                        name="num_documento" value="{{ old('name') }}" required
                                        autocomplete="num_documento" autofocus>

                                    {{-- @error('num_documento')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tipo_identificacion"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Tipo Identificación') }}</label>

                                <div class="col-md-6">
                                    <select class="custom-select" name="tipo_identificacion" id="tipo_identificacion">
                                        <option value="" disabled selected>Seleccione su tipo de identificación</option>
                                        @foreach ($tipoIdentificacion as $tipoIdent)
                                            <option value="{{ $tipoIdent->id }}">
                                                {{ $tipoIdent->nombre_tipo_identificacion }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tipo_usuario"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Tipo de usuario') }}</label>

                                <div class="col-md-6">
                                    <select class="custom-select" name="tipo_usuario" id="tipo_usuario">
                                        <option value="" disabled selected>Seleccione su tipo de usuario</option>
                                        @foreach ($tipoUsuario as $tipoUsu)
                                            <option value="{{ $tipoUsu->id }}">
                                                {{ $tipoUsu->nombre_tipo_usuario }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nombre"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                                <div class="col-md-6">
                                    <input id="nombre" type="text"
                                        class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                                        value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

                                    {{-- @error('nombre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="apellido"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                                <div class="col-md-6">
                                    <input id="apellido" type="text"
                                        class="form-control @error('apellido') is-invalid @enderror" name="apellido"
                                        value="{{ old('apellido') }}" required autocomplete="apellido" autofocus>

                                    {{-- @error('apellido')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="sexo" class="col-md-4 col-form-label text-md-right">{{ __('Sexo') }}</label>

                                <div class="col-md-6">
                                    <select class="custom-select" name="sexo" id="sexo">
                                        <option value="" disabled selected>Seleccione su sexo</option>
                                        <option value="0">Femenino</option>
                                        <option value="1">Masculino</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="direccion"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Dirección') }}</label>

                                <div class="col-md-6">
                                    <input id="direccion" type="text"
                                        class="form-control @error('direccion') is-invalid @enderror" name="direccion"
                                        value="{{ old('direccion') }}" required autocomplete="direccion" autofocus>

                                    {{-- @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telefono"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Teléfono') }}</label>

                                <div class="col-md-6">
                                    <input id="telefono" type="text"
                                        class="form-control @error('telefono') is-invalid @enderror" name="telefono"
                                        value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>

                                    {{-- @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="celular1"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Celular 1') }}</label>

                                <div class="col-md-6">
                                    <input id="celular1" type="text"
                                        class="form-control @error('celular1') is-invalid @enderror" name="celular1"
                                        value="{{ old('celular1') }}" required autocomplete="celular1" autofocus>

                                    {{-- @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="celular2"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Celular 2') }}</label>

                                <div class="col-md-6">
                                    <input id="celular2" type="text"
                                        class="form-control @error('celular2') is-invalid @enderror" name="celular2"
                                        value="{{ old('celular2') }}" required autocomplete="celular2" autofocus>

                                    {{-- @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror --}}
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="estado"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>

                                <div class="col-md-6">
                                    <select class="custom-select" name="estado" id="estado">
                                        <option value="" disabled selected>Seleccione su estado</option>
                                        <option value="0">Activo</option>
                                        <option value="1">Desactivo</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
