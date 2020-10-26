@extends('layouts.admin')
@section('contenido')

{{-- Inicio título página --}}
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE PROVEEDORES
    </h3>
</div>
{{-- Fin título página --}}

{{-- Inicio encabezado --}}
<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs">
        <li>
            @can('proveedores.create')
                <a href="proveedores/create"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR PROVEEDOR</a>
            @endcan
        </li>
    </ul>
</div>
{{-- Fin encabezado --}}

{{-- Inicio buscar --}}
@include('comercial.proveedores.search')
{{-- Fin buscar --}}

{{-- Inicio tabla proveedores --}}
<div class="container-fluid">
    <div class="table-responsive">
        <table class="table table-dark table-sm">
            <thead>
                <tr class="text-center roboto-medium">
                    <th>NIT</th>
                    <th>RAZÓN SOCIAL</th>
                    <th>TIPO PROVEEDOR</th>
                    <th>OPCIONES</th>
                </tr>
            </thead>

            {{-- Inicio listar datos --}}
            @foreach($proveedor as $prove)
                <tbody>
                    <tr class="text-center">
                        <td>{{ $prove->nit }}</td>
                        <td>{{ $prove->razon_social }}</td>
                        <td>{{ $prove->categoria }}</td>

                        {{-- Inicio opciones --}}
                        <td>
                            @can('proveedores.show')
                                <a href="{{ URL::action('ProveedorController@show',$prove->id_proveedor) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                            @endcan
                            @can('proveedores.edit')
                                <a href="{{ URL::action('ProveedorController@edit',$prove->id_proveedor) }}" class="btn btn-dark"><i class="fas fa-edit"></i></a>
                            @endcan
                            @can('proveedores.destroy')
                                <a href="#" data-target="#modal-delete-{{ $prove->id_proveedor }}" data-toggle="modal" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                            @endcan
                        </td>
                        {{-- Fin opciones --}}
                    </tr>
                    @include('comercial.proveedores.modal')
                </tbody>
            @endforeach
            {{-- Fin listar datos --}}
        </table>
    </div>
    {{ $proveedor->render() }}
</div>
{{-- Fin tabla proveedores --}}
@endsection