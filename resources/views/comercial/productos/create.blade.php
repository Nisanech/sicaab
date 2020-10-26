@extends('layouts.admin')
@section('contenido')

{{-- Inicio título página --}}
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR PRODUCTO
    </h3>
</div>
{{-- Fin título página --}}

{{-- Inicio contenido --}}
<div class="container-fluid">
    <div class="form-neon" autocomplete="off">
        <fieldset>
            <legend><i class="fas fa-boxes fa-fw"></i> &nbsp; Información del Producto</legend>

            {{-- Inicio validación de campos --}}
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{-- Fin validación de campos --}}

            {{-- Inicio formulario --}}
            {!! Form::open(array('url'=>'comercial/productos', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true')) !!}
            {!! Form::token() !!}

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-2">
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="nombre_producto" class="bmd-label-floating">Nombre del Producto</label>
                            <select name="id_arte" id="id_arte" class="form-control">
                                @foreach ($arte as $art)
                                    <option value="{{ $art->id_arte }}">{{ $art->nombre_producto }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="vlr_unitario" class="bmd-label-floating">($) Valor Unitario</label>
                            <input type="text" name="vlr_unitario" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Inicio botones --}}
            <br>
            <p class="text-center">
                <a type="reset" href="{{ url('comercial/productos') }}" class="btn btn-raised btn-danger btn-sm"><i class="fas fa-window-close"></i> &nbsp; CANCELAR</a>
                &nbsp; &nbsp;
                <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
            </p>
            {{-- Fin botones --}}

            {!! Form::close() !!}
            {{-- Fin formulario --}}
        </fieldset>
    </div>
</div>
{{-- Fin contenido --}}
@endsection