@extends('layouts.admin')
@section('contenido')

{{-- Inicio título página --}}
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR MATERIAL
    </h3>
</div>
{{-- Fin título página --}}

{{-- Inicio contenido --}}
<div class="container-fluid">
    <div class="form-neon" autocomplete="off">
        <fieldset>
            <legend><i class="fas fa-boxes fa-fw"></i> &nbsp; Información Principal</legend>
            
            {{-- Inicio validación de campos --}}
            @if (count($errors)>0)
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
            {!! Form::open(array('url'=>'almacen/materiales','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {!! Form::token() !!}

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="nombre_material" class="bmd-label-floating">Nombre del material</label>
                            <input type="text" name="nombre_material"  value="{{ old('nombre_material') }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="unidad_medida" class="bmd-label-floating">Unidad de medida</label>
                            <input type="text" name="unidad_medida"  value="{{ old('unidad_medida') }}" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="id_categoriamaterial" class="bmd-label-floating">Categoría</label>
                            <select name="id_categoriamaterial" class="form-control">
                                @foreach ($categoria as $cat)
                                    <option value="{{ $cat->id_categoriamaterial }}">{{ $cat->categoria }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="stock" class="bmd-label-floating">Stock</label>
                            <input type="number" name="stock"  value="{{ old('stock') }}" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Inicio botones --}}
            <br>
            <p class="text-center">
                <a type="reset" href="{{ url('almacen/materiales') }}" class="btn btn-raised btn-danger btn-sm"><i class="fas fa-window-close"></i> &nbsp; CANCELAR</a>
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