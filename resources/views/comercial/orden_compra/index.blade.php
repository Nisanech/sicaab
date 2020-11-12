@extends('layouts.admin')
@section('contenido')

{{-- Inicio título página --}}
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE ÓRDENES DE COMPRA
    </h3>
</div>
{{-- Fin título página --}}

{{-- Inicio encabezado --}}
<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs">
        <li>
            <a href="{{ url('comercial/orden_compra/create') }}"><i class="fas fa-plus"></i> &nbsp; AGREGAR ORDEN DE COMPRA</a>
        </li>
    </ul>
</div>
{{-- Fin encabezado --}}

{{-- Inicio buscar --}}
@include('comercial.orden_compra.search')
{{-- Fin buscar --}}

{{-- Inicio tabla órdenes de compra --}}
<div class="container-fluid">
    <div class="table-responsib">
        <table class="table table-dark table-sm">
            <thead>
                <tr class="text-center roboto-medium">
                    <th>ORDEN DE COMPRA</th>
                    <th>FECHA</th>
                    <th>CLIENTE</th>
                    <th>ESTADO</th>
                    <th>OPCIONES</th>
                </tr>
            </thead>

            {{-- Inicio listar datos --}}
            @foreach ($compra as $com)
                <tbody>
                    <tr class="text-center">
                        <td>{{ $com->num_orden }}</td>
                        <td>{{ $com->fecha_solicitud }}</td>
                        <td>{{ $com->razon_social }}</td>
                        <td>{{ $com->estado }}</td>

                        {{-- Inicio opciones --}}
                        <td>
                            @can('orden_compra.show')
                                <a href="{{ URL::action('OrdenCompraController@show', $com->id_ordencompra) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                            @endcan
                            @can('orden_compra.destroy')
                                <a href="#" data-target="#modal-delete-{{ $com->id_ordencompra }}" data-toggle="modal" class="btn btn-danger"><i class="fas fa-ban"></i></a>
                            @endcan
                        </td>
                        {{-- Fin opciones --}}
                    </tr>
                    @include('comercial.orden_compra.modal')
                </tbody>
            @endforeach
            {{-- Fin listar datos --}}
        </table>
    </div>
    {{ $compra->render() }}
</div>
{{-- Fin tabla órdenes de compra --}}
@endsection