@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" class="row g-3">
                        @csrf

                        <div class="col-md-6">
                            <label for="name" class="form-label">{{ __('Nombre') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="email" class="form-label">{{ __('Correo') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="password-confirm" class="form-label">{{ __('Confirmar Contraseña') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="col-md-6">
                            <label for="curp" class="form-label">{{ __('CURP') }}</label>
                            <input id="curp" type="text" class="form-control @error('curp') is-invalid @enderror" name="curp" value="{{ old('curp') }}" required autocomplete="curp" autofocus>
                            @error('curp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="telefono" class="form-label">{{ __('Telefono') }}</label>
                            <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>
                            @error('telefono')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="clave_elector" class="form-label">{{ __('Clave Elector') }}</label>
                            <input id="clave_elector" type="text" class="form-control @error('clave_elector') is-invalid @enderror" name="clave_elector" value="{{ old('clave_elector') }}" required autocomplete="clave_elector" autofocus>
                            @error('clave_elector')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12">
                            <label for="domicilio" class="form-label">{{ __('Domicilio') }}</label>
                            <input id="domicilio" type="text" class="form-control @error('domicilio') is-invalid @enderror" name="domicilio" value="{{ old('domicilio') }}" required autocomplete="domicilio" autofocus>
                            @error('domicilio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="municipio" class="form-label">{{ __('Municipio') }}</label>
                            <select id="municipio" class="form-select @error('municipio') is-invalid @enderror" name="municipio" required autocomplete="municipio" autofocus>
                                <option value="" disabled selected>Seleccione el municipio</option>
                                @foreach ($municipios as $municipio)
                                    <option value="{{ $municipio->id }}" @if(old('municipio') == $municipio->id) selected @endif>{{ $municipio->nombre }}</option>
                                @endforeach
                            </select>
                            @error('municipio')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="estado" class="form-label">{{ __('Estado') }}</label>
                            <select id="estado" class="form-select @error('estado') is-invalid @enderror" name="estado" required autocomplete="estado" autofocus>
                                <option value="" disabled selected>Seleccione el estado</option>
                                @foreach ($estados as $estado)
                                    <option value="{{ $estado->id }}" @if(old('estado') == $estado->id) selected @endif>{{ $estado->nombre }}</option>
                                @endforeach
                            </select>
                            @error('estado')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="seccion" class="form-label">{{ __('Sección') }}</label>
                            <select id="seccion" class="form-select @error('seccion') is-invalid @enderror" name="seccion" required autocomplete="seccion" autofocus>
                                <option value="" disabled selected>Seleccione la sección</option>
                                @foreach ($secciones as $seccion)
                                    <option value="{{ $seccion->id }}" @if(old('seccion') == $seccion->id) selected @endif>{{ $seccion->nombre }}</option>
                                @endforeach
                            </select>
                            @error('seccion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="col-md-6">
                            <label for="distrito" class="form-label">{{ __('Distrito') }}</label>
                            <select id="distrito" class="form-select @error('distrito') is-invalid @enderror" name="distrito" required autocomplete="distrito" autofocus>
                                <option value="" disabled selected>Seleccione el distrito</option>
                                @foreach ($distritos as $distrito)
                                    <option value="{{ $distrito->id }}" @if(old('distrito') == $distrito->id) selected @endif>{{ $distrito->nombre }}</option>
                                @endforeach
                            </select>
                            @error('distrito')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>



                        <div class="col-md-6">
                            <label for="vigencia" class="form-label">{{ __('Año de emision (Año)') }}</label>
                            <select id="vigencia" class="form-select @error('vigencia') is-invalid @enderror" name="vigencia" required autocomplete="vigencia" autofocus>
                                <option value="" disabled selected>Seleccione el año</option>
                                @for ($year = 2002; $year <= 2018; $year++)
                                    <option value="{{ $year }}" @if(old('vigencia') == $year) selected @endif>{{ $year }}</option>
                                @endfor
                            </select>
                            @error('vigencia')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">{{ __('Registrarte') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
