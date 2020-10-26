@extends('layouts.admin')
@section('contenido')

{{-- Inicio título página --}}
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-edit"></i> &nbsp; EDITAR ARTE DEL PRODUCTO &nbsp; <strong>{{ $arte->nombre_producto }}</strong>
    </h3>
</div>
{{-- Fin título página --}}

{{-- Inicio contenido --}}
<div class="container-fluid">
    <div class="form-neon" autocomplete="off">
        <fieldset>
            <legend><i class="fas fa-palette"></i> &nbsp; Información del Producto</legend>

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
            <form method="POST" action="{{ route('artes.update', $arte->id_arte) }}" enctype="multipart/form-data" class="container-fluid">
                @method('PUT')
                {!! Form::token() !!}

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="razon_social" class="bmd-label-floating">Cliente</label>
                                <select name="id_cliente" class="form-control">
                                    @foreach ($cliente as $cli)
                                        @if($cli->id_cliente==$arte->id_cliente)
                                            <option value="{{ $cli->id_cliente }}" selected>{{ $cli->razon_social }}</option>
                                        @else
                                            <option value="{{ $cli->id_cliente }}">{{ $cli->razon_social }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="nombre_producto" class="bmd-label-floating">Nombre del Producto</label>
                                <input type="text" name="nombre_producto" value="{{ $arte->nombre_producto }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="id_categoriaproducto" class="bmd-label-floating">Categoría</label>
                                <select name="id_categoriaproducto" class="form-control">
                                    @foreach ($categoria as $cat)
                                        @if($cat->id_categoriaproducto==$arte->id_categoriaproducto)
                                            <option value="{{ $cat->id_categoriaproducto }}" selected>{{ $cat->categoria }}</option>
                                        @else
                                            <option value="{{ $cat->id_categoriaproducto }}">{{ $cat->categoria }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <legend><i class="fas fa-paint-brush"></i> &nbsp; Dimensiones (mm)</legend>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="alto" class="bmd-label-floating">Alto</label>
                                <input type="text" name="alto" value="{{ $arte->alto }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="largo" class="bmd-label-floating">Largo</label>
                                <input type="text" name="largo" value="{{ $arte->largo }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="ancho" class="bmd-label-floating">Ancho</label>
                                <input type="text" name="ancho" value="{{ $arte->ancho }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="imagen" class="bmd-label-floating">Imagen</label>
                                    <input type="file" name="imagen" class="form-control-file" id="customFilelang" lang="es">
                                    <br>
                                    @if (($arte->imagen)!="")  {{-- Condicional para mostrar el arte cargada --}}
                                        <img src="{{ asset('imagenes/artes/'.$arte->imagen) }}" height="100%" width="300px" class="img-thumbnail">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Inicio botones --}}
                <br>
                <p class="text-center">
                    <a type="reset" href="{{ url('comercial/artes') }}" class="btn btn-raised btn-danger btn-sm"><i class="fas fa-window-close"></i> &nbsp; CANCELAR</a>
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