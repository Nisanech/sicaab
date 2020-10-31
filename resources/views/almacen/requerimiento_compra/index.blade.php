@extends('layouts.admin')
@section('contenido')

{{-- Inicio título página --}}
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE REQUERIMIENTOS DE COMPRA
    </h3>
</div>
{{-- Fin título página --}}

{{-- Inicio encabezado --}}
<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs">
        <li>
            <a href="{{ url('almacen/requerimiento_compra/create') }}"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR REQUERIMIENTO DE COMPRA</a>
        </li>
    </ul>
</div>
{{-- Fin encabezado --}}

{{-- Inicio buscar --}}
@include('almacen.requerimiento_compra.search')
{{-- Fin buscar --}}

{{-- Inicio tabla requerimientos --}}
<div class="container-fluid">
    <div class="table-responsive">
        <table class="table table-dark table-sm">
            <thead>
                <tr class="text-center roboto-medium">
                    <th>NÚMERO REQUERIMIENTO</th>
                    <th>FECHA</th>
                    <th>PROVEEDOR</th>
                    <th>ESTADO</th>
                    <th>OPCIONES</th>
                </tr>
            </thead>

            {{-- Inicio listar datos --}}
            @foreach ($requerimiento as $req)
                <tbody>
                    <tr class="text-center">
                        <td>{{ $req->id_requerimiento }}</td>
                        <td>{{ $req->fecha }}</td>
                        <td>{{ $req->razon_social }}</td>
                        <td>{{ $req->estado }}</td>

                        {{-- Inicio opciones --}}
                        <td>
                            @can('requerimiento_compra.show')
                                <a href="{{  URL::action('RequerimientoCompraController@show', $req->id_requerimiento) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                            @endcan
                            @can('requerimiento_compra.destroy')
                                <a href="#" data-target="#modal-delete-{{ $req->id_requerimiento }}" data-toggle="modal" class="btn btn-danger"><i class="fas fa-ban"></i></a>
                            @endcan
                        </td>
                        {{-- Fin opciones --}}
                    </tr>
                    @include('almacen.requerimiento_compra.modal')
                </tbody>
            @endforeach
            {{-- Fin listar datos --}}
        </table>
    </div>
    {{ $requerimiento->render() }}
</div>
{{-- Fin tabla requerimientos --}}
@endsection