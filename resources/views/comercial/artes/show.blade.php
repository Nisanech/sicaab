@extends('layouts.admin')
@section('contenido')
    
{{-- Inicio título página --}}
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-eye"></i> &nbsp; DETALLE ARTE PRODUCTO <strong> &nbsp; {{ $arte->nombre_producto }}</strong>
    </h3>
</div>
{{-- Fin título página --}}

{{-- Inicio contenido --}}
<div class="container-fluid">
    <div class="form-neon" autocomplete="off">
        <fieldset>
            <legend><i class="fas fa-palette"></i> &nbsp; Información del Producto</legend>

            {{-- Inicio formulario --}}
            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="razon_social"><strong>Cliente</strong></label>
                            <p class="form-control">{{ $arte->razon_social }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="nombre_producto"><strong>Nombre del Producto</strong></label>
                            <p class="form-control">{{ $arte->nombre_producto }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="categoria"><strong>Categoría</strong></label>
                            <p class="form-control">{{ $arte->categoria }}</p>
                        </div>
                    </div>
                    <legend><i class="fas fa-paint-brush"></i> &nbsp; Dimensiones</legend>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="alto"><strong>Alto</strong></label>
                            <p class="form-control">{{ $arte->alto }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="largo"><strong>Largo</strong></label>
                            <p class="form-control">{{ $arte->largo }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="ancho"><strong>Ancho</strong></label>
                            <p class="form-control">{{ $arte->ancho }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="imagen"><strong>Imagen</strong></label>
                            <img src="{{ asset('imagenes/artes/'.$arte->imagen) }}" height="300px" width="300px" class="img-thumbnail">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Inicio botones --}}
            <br>
            <p class="text-center">
                <a type="reset" href="{{ url('comercial/artes') }}" class="btn btn-raised btn-success btn-sm"><i class="fas fa-check-circle"></i> &nbsp; ACEPTAR</a>
            </p>
            {{-- Fin botones --}}
            {{-- Fin formulario --}}
        </fieldset>
    </div>
</div>
{{-- Fin contenido --}}
@endsection