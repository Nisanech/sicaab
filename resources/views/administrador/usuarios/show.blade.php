@extends('layouts.admin')
@section('contenido')

{{-- Inicio título página --}}
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-eye"></i> &nbsp; DETALLE USUARIO <strong> &nbsp; {{ $user->name }}</strong>
    </h3>
</div>
{{-- Fin título página --}}

{{-- Inicio contenido --}}
<div class="container-fluid">
    <div class="form-neon" autocomplete="off">
        <fieldset>
            <legend><i class="fas fa-user"></i> &nbsp; Información Principal</legend>

            {{-- Inicio formulario --}}
            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="id" class=""><strong>ID</strong></label>
                            <p class="form-control">{{ $user->id }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="name" class=""><strong>NOMBRE USUARIO</strong></label>
                            <p class="form-control">{{ $user->name }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="email" class=""><strong>CORREO ELÉCTRONICO</strong></label>
                            <p class="form-control">{{ $user->email }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="password" class=""><strong>CONTRASEÑA</strong></label>
                            <p class="form-control">{{ $user->password }}</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Inicio botones --}}
            <br>
            <p class="text-center">
                <a type="reset" href="{{ url('administrador/usuarios') }}" class="btn btn-raised btn-success btn-sm"><i class="fas fa-check-circle"></i> &nbsp; ACEPTAR</a>
            </p>
            {{-- Fin botones --}}
            {{-- Fin formulario --}}
        </fieldset>
    </div>
</div>
{{-- Fin contenido --}}
@endsection