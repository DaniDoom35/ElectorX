@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" class="row g-3">
                        @csrf

                        <div class="col-md-6">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
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
                            <input id="municipio" type="text" class="form-control @error('municipio') is-invalid @enderror" name="municipio" value="{{ old('municipio') }}" required autocomplete="municipio" autofocus>
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
                                @foreach($estados as $estado)
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
                            <input id="seccion" type="text" class="form-control @error('seccion') is-invalid @enderror" name="seccion" value="{{ old('seccion') }}" required autocomplete="seccion" autofocus>
                            @error('seccion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="localidad" class="form-label">{{ __('Localidad') }}</label>
                            <input id="localidad" type="text" class="form-control @error('localidad') is-invalid @enderror" name="localidad" value="{{ old('localidad') }}" required autocomplete="localidad" autofocus>
                            @error('localidad')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="vigencia" class="form-label">{{ __('Vigencia (Año)') }}</label>
                            <select id="vigencia" class="form-select @error('vigencia') is-invalid @enderror" name="vigencia" required autocomplete="vigencia" autofocus>
                                <option value="" disabled selected>Seleccione el año</option>
                                @for ($year = 2020; $year <= 2030; $year++)
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
                            <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
