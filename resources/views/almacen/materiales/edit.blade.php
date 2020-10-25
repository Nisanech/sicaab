@extends('layouts.admin')
@section('contenido')

{{-- Inicio título página --}}
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-edit"></i> &nbsp; EDITAR MATERIAL <strong> &nbsp; {{ $material->nombre_material}}</strong>
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
            <form method="POST" action="{{ route('materiales.update', $material->id_material) }}" enctype="multipart/form-data">
                @method('PUT')
                {!! Form::token() !!}

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="nombre_material" class="bmd-label-floating">Nombre del material</label>
                                <input type="text" name="nombre_material"  value="{{ $material->nombre_material }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="unidad_medida" class="bmd-label-floating">Unidad de medida</label>
                                <input type="text" name="unidad_medida"  value="{{ $material->unidad_medida }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="categoria" class="bmd-label-floating">Categoría</label>
                                <select name="categoria" class="form-control">
                                    <option value="Caja empaque">Caja empaque</option>
                                    <option value="Insumo">Insumo</option>
                                    <option value="Papel">Papel</option>
                                    <option value="Papel empaque">Papel empaque</option>
                                    <option value="Tinta">Tinta</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="stock" class="bmd-label-floating">Stock</label>
                                <input type="number" name="stock"  value="{{ $material->stock }}" class="form-control">
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
            </form>
            {{-- Fin formulario --}}
        </fieldset>
    </div>
</div>    
{{-- Fin contenido --}}
@endsection