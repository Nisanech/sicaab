@extends('layouts.admin')
@section('contenido')

{{-- Inicio título página --}}
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-eye"></i> &nbsp; DETALLE MATERIAL <strong> &nbsp; {{ $material->nombre_material}}</strong>
    </h3>
</div>
{{-- Fin título página --}}

{{-- Inicio contenido --}}
<div class="container-fluid">
    <div class="form-neon" autocomplete="off">
        <fieldset>
            <legend><i class="fas fa-boxes fa-fw"></i> &nbsp; Información Principal</legend>

            {{-- Inicio formulario --}}
            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="nombre_material" class=""><strong>Nombre del material</strong></label>
                            <p class="form-control">{{ $material->nombre_material }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="unidad_medida" class=""><strong>Unidad de medida</strong></label>
                            <p class="form-control">{{ $material->unidad_medida }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="categoria" class=""><strong>Categoría</strong></label>
                            <p class="form-control">{{ $material->categoria }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="stock" class=""><strong>Stock</strong></label>
                            <p class="form-control">{{ $material->stock }}</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Inicio botones --}}
            <br>
            <p class="text-center">
                <a type="reset" href="{{url('almacen/materiales')}}" class="btn btn-raised btn-success btn-sm"><i class="fas fa-check-circle"></i> &nbsp; ACEPTAR</a>
            </p>
            {{-- Fin botones --}}
            {{-- Fin formulario --}}
        </fieldset>
    </div>
</div>    
{{-- Fin contenido --}}
@endsection