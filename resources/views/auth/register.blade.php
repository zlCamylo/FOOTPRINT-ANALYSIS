@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro instructor') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="TipoDocumentoInstr" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de documento') }}</label>

                            <div class="col-md-6">
                                <input id="TipoDocumentoInstr" type="text" class="form-control{{ $errors->has('TipoDocumentoInstr') ? ' is-invalid' : '' }}" name="TipoDocumentoInstr" value="{{ old('TipoDocumentoInstr') }}" required autofocus>

                                @if ($errors->has('TipoDocumentoInstr'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('TipoDocumentoInstr') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('Número de documento') }}</label>

                            <div class="col-md-6">
                                <input id="id" type="text" class="form-control{{ $errors->has('id') ? ' is-invalid' : '' }}" name="id" value="{{ old('id') }}" required autofocus>

                                @if ($errors->has('id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="NombresInstr" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="NombresInstr" type="text" class="form-control{{ $errors->has('NombresInstr') ? ' is-invalid' : '' }}" name="NombresInstr" value="{{ old('NombresInstr') }}" required autofocus>

                                @if ($errors->has('NombresInstr'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('NombresInstr') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                        

                        <div class="form-group row">
                            <label for="ApellidosInstr" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="ApellidosInstr" type="text" class="form-control{{ $errors->has('ApellidosInstr') ? ' is-invalid' : '' }}" name="ApellidosInstr" value="{{ old('ApellidosInstr') }}" required autofocus>

                                @if ($errors->has('ApellidosInstr'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ApellidosInstr') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="FechaNacimientoInstr" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de nacimiento') }}</label>

                            <div class="col-md-6">
                                <input id="FechaNacimientoInstr" type="date" class="form-control{{ $errors->has('FechaNacimientoInstr') ? ' is-invalid' : '' }}" name="FechaNacimientoInstr" value="{{ old('FechaNacimientoInstr') }}" required autofocus>

                                @if ($errors->has('FechaNacimientoInstr'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('FechaNacimientoInstr') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="CiudadResidenciaInstr" class="col-md-4 col-form-label text-md-right">{{ __('Ciudad de residencia') }}</label>

                            <div class="col-md-6">
                                <input id="CiudadResidenciaInstr" type="text" class="form-control{{ $errors->has('CiudadResidenciaInstr') ? ' is-invalid' : '' }}" name="CiudadResidenciaInstr" value="{{ old('CiudadResidenciaInstr') }}" required autofocus>

                                @if ($errors->has('CiudadResidenciaInstr'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('CiudadResidenciaInstr') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="DireccionResidenciaInstr" class="col-md-4 col-form-label text-md-right">{{ __('Dirección de residencia') }}</label>

                            <div class="col-md-6">
                                <input id="DireccionResidenciaInstr" type="text" class="form-control{{ $errors->has('DireccionResidenciaInstr') ? ' is-invalid' : '' }}" name="DireccionResidenciaInstr" value="{{ old('DireccionResidenciaInstr') }}" required autofocus>

                                @if ($errors->has('DireccionResidenciaInstr'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('DireccionResidenciaInstr') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="NoCelularInstr" class="col-md-4 col-form-label text-md-right">{{ __('Numero de celular') }}</label>

                            <div class="col-md-6">
                                <input id="NoCelularInstr" type="text" class="form-control{{ $errors->has('NoCelularInstr') ? ' is-invalid' : '' }}" name="NoCelularInstr" value="{{ old('NoCelularInstr') }}" required autofocus>

                                @if ($errors->has('NoCelularInstr'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('NoCelularInstr') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="CentroFormacionInstr" class="col-md-4 col-form-label text-md-right">{{ __('Centro de formación') }}</label>

                            <div class="col-md-6">
                                <input id="CentroFormacionInstr" type="text" class="form-control{{ $errors->has('CentroFormacionInstr') ? ' is-invalid' : '' }}" name="CentroFormacionInstr" value="{{ old('CentroFormacionInstr') }}" required autofocus>

                                @if ($errors->has('CentroFormacionInstr'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('CentroFormacionInstr') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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
