@extends('layouts.admin')
@section('contenido')

{{-- Inicio título página --}}
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR CLIENTE
    </h3>
</div>
{{-- Fin título página --}}

{{-- Inicio contenido principal --}}
<div class="container-fluid">
    <div class="form-neon" autocomplete="off">
        <fieldset>
            <legend><i class="fas fa-user"></i> &nbsp; Información Principal</legend>

            {{-- Inicio validación de campos --}}
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{-- Fin validación de campos --}}

            {{-- Inicio formulario --}}
            {!! Form::open(array('url'=>'comercial/cliente', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true')) !!}
            {!! Form::token() !!}

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="nit" class="bmd-label-floating">NIT</label>
                            <input type="text" name="nit" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="razon_social" class="bmd-label-floating">Razón Social</label>
                            <input type="text" name="razon_social" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="direccion" class="bmd-label-floating">Dirección</label>
                            <input type="text" name="direccion" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="telefono" class="bmd-label-floating">Teléfono</label>
                            <input type="text" name="telefono" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="ciudad" class="bmd-label-floating">Ciudad</label>
                            <input type="text" name="ciudad" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="correo" class="bmd-label-floating">Correo eléctronico</label>
                            <input type="text" name="correo" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="persona_contacto" class="bmd-label-floating">Persona de Contacto</label>
                            <input type="text" name="persona_contacto" class="form-control">
                        </div>
                    </div>
                    
                </div>
            </div>

            {{-- Inicio botones --}}
            <br>
            <p class="text-center">
                <a href="{{ url('comercial/cliente') }}" type="reset" class="btn btn-raised btn-danger btn-sm"><i class="fas fa-window-close"></i> &nbsp; CANCELAR</a>
                &nbsp; &nbsp;
                <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
            </p>
            {{-- Fin botones --}}

            {!! Form::close() !!}
            {{-- Fin formulario --}}
        </fieldset>
    </div>
</div>
{{-- Fin contenido principal --}}
@endsection