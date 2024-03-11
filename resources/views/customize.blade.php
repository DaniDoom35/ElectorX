@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-3">
                <div class="card-header">{{ __('Personalizar Correo Electrónico') }}</div>
                <div class="card-body">
                    {{-- <form method="POST" action="{{ route('profile.update.email') }}"> --}}
                    @csrf
                    @method('PUT')

                    <!-- Nombre -->
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                        <div class="col-md-6">
                            <span>{{ Auth::user()->name }}</span>
                        </div>
                    </div>

                    <!-- CURP -->
                    <div class="form-group row">
                        <label for="curp" class="col-md-4 col-form-label text-md-right">{{ __('CURP') }}</label>
                        <div class="col-md-6">
                            <span>{{ Auth::user()->curp }}</span>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Nuevo Correo Electrónico') }}</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? Auth::user()->email }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0 mt-3">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Guardar Cambios') }}
                            </button>
                        </div>
                    </div>
                    {{-- </form> --}}
                </div>
            </div>

            <div class="card mb-3">
                <div class="card-header">{{ __('Cambiar Contraseña') }}</div>
                <div class="card-body">
                    {{-- <form method="POST" action="{{ route('profile.update.password') }}"> --}}
                    @csrf
                    @method('PUT')

                    <!-- Current Password -->
                    <div class="form-group row">
                        <label for="current-password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña Actual') }}</label>
                        <div class="col-md-6">
                            <input id="current-password" type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" required autocomplete="current-password">
                            @error('current_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <!-- New Password -->
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Nueva Contraseña') }}</label>
                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>
                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0 mt-3">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Guardar Cambios') }}
                            </button>
                        </div>
                    </div>
                    {{-- </form> --}}
                </div>
            </div>

            <div class="card">
                <div class="card-header">{{ __('Eliminar Cuenta') }}</div>
                <div class="card-body">
                    {{-- <form method="POST" action="{{ route('profile.destroy') }}"> --}}
                    @csrf
                    @method('DELETE')

                    <p>¿Estás seguro de que quieres eliminar tu cuenta? Esta acción no se puede deshacer.</p>

                    <div class="form-group row mb-0 mt-3">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar tu cuenta? Esta acción no se puede deshacer.')">
                                {{ __('Eliminar Cuenta') }}
                            </button>
                        </div>
                    </div>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
