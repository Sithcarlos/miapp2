@extends('v1.layouts.main')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-1"></div>
        <div class="col-12">
            <h2>Editar Usuario</h2>



            <form method="POST" action="{{ route('editar') }}">
                @csrf

                <input type="hidden" name="id" value="{{ $usuario->id }}">

                <div class="form-group row">
                    <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                    <div class="col-md-6">
                        <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror"
                            name="nombre" value="{{ old('nombre') ? old('nombre'):$usuario->nombre }}" required>
                        @error('nombre')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="activo" class="col-md-4 col-form-label text-md-right">{{ __('Activo') }}</label>

                    <div class="col-md-6">
                        <input id="activo" type="checkbox" class="form-control" name="activo" value="activo"
                            {{ $usuario->activo? "checked":"" }}>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Guardar') }}
                        </button>
                    </div>
                </div>
            </form>




        </div>
        <div class="col-1"></div>
    </div>
    <!--/row-->

</div>
@endsection