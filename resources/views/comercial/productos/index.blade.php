@extends('layouts.admin')
@section('contenido')

{{-- Inicio título página --}}
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PRODUCTOS
    </h3>
</div>
{{-- Fin título página --}}

{{-- Inicio encabezado --}}
<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs">
        <li>
            <a href="{{ url('comercial/productos/create') }}"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR PRODUCTO</a>
        </li>
    </ul>
</div>
{{-- Fin encabezado --}}

{{-- Inicio buscar --}}
@include('comercial.productos.search')
{{-- Fin buscar --}}

{{-- Inicio tabla productos --}}
<div class="container-fluid">
    <div class="table-responsive">
        <table class="table table-dark table-sm">
            <thead>
                <tr class="text-center roboto-medium">
                    <th>CLIENTE</th>
                    <th>NOMBRE DEL PRODUCTO</th>
                    <th>($) VALOR UNITARIO</th>
                    <th>CATEGORÍA</th>
                    <th>OPCIONES</th>
                </tr>
            </thead>

            {{-- Inicio listar datos --}}
            @foreach ($producto as $pro)
                <tbody>
                    <tr class="text-center">
                        <td>{{ $pro->razon_social }}</td>
                        <td>{{ $pro->nombre_producto }}</td>
                        <td>$ {{ $pro->vlr_unitario }}</td>
                        <td>{{ $pro->categoria }}</td>

                        {{-- Inicio opciones --}}
                        <td>
                            @can('productos.edit')
                                <a href="{{ URL::action('ProductoController@edit', $pro->id_producto) }}" class="btn btn-dark"><i class="fas fa-edit"></i></a>
                            @endcan
                            @can('productos.destroy')
                                <a href="#" data-target="#modal-delete-{{ $pro->id_producto }}" data-toggle="modal" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                            @endcan
                        </td>
                        {{-- Fin opciones --}}
                    </tr>
                    @include('comercial.productos.modal')
                </tbody>
            @endforeach
            {{-- Fin listar datos --}}
        </table>
    </div>
    {{ $producto->render() }}
</div>
{{-- Fin tabla productos --}}
@endsection