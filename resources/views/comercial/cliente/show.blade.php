@extends('layouts.admin')
@section('contenido')

{{-- Inicio título página --}}
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-eye"></i> &nbsp; DETALLE CLIENTE <strong> &nbsp; {{ $cliente->razon_social }}</strong>
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
                            <label for="nit" class=""><strong>NIT</strong></label>
                            <p class="form-control">{{ $cliente->nit }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="razon_social" class=""><strong>Razón Social</strong></label>
                            <p class="form-control">{{ $cliente->razon_social }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="direccion" class=""><strong>Dirección</strong></label>
                            <p class="form-control">{{ $cliente->direccion }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="telefono" class=""><strong>Teléfono</strong></label>
                            <p class="form-control">{{ $cliente->telefono }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="correo" class=""><strong>Correo Eléctronico</strong></label>
                            <p class="form-control">{{ $cliente->correo }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="persona_contacto" class=""><strong>Persona de Contacto</strong></label>
                            <p class="form-control">{{ $cliente->persona_contacto }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="ciudad" class=""><strong>Ciudad</strong></label>
                            <p class="form-control">{{ $cliente->ciudad }}</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Inicio botones --}}
            <br>
            <p class="text-center">
                <a type="reset" href="{{ url('comercial/cliente') }}" class="btn btn-raised btn-success btn-sm"><i class="fas fa-check-circle"></i> &nbsp; ACEPTAR</a>
            </p>
            {{-- Fin botones --}}
            {{-- Fin formulario --}}
        </fieldset>
    </div>
</div>
{{-- Fin contenido --}}
@endsection