@extends('layouts.admin')
@section('contenido')

{{-- Inicio título página --}}
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE CLIENTES
    </h3>
</div>
{{-- Fin título página --}}

{{-- Inicio encabezado --}}
<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs">
        <li>
            @can('cliente.create')
                <a href="cliente/create"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR CLIENTE</a>
            @endcan
        </li>
    </ul>
</div>
{{-- Fin encabezado --}}

{{-- Inicio buscar --}}
@include('comercial.cliente.search')
{{-- Fin buscar --}}

{{-- Inicio tabla clientes --}}
<div class="container-fluid">
    <div class="table-responsive">
        <table class="table table-dark table-sm">
            <thead>
                <tr class="text-center roboto-medium">
                    <th>NIT</th>
                    <th>RAZÓN SOCIAL</th>
                    <th>DIRECCIÓN</th>
                    <th>TELÉFONO</th>
                    <th>CORREO</th>
                    <th>PERSONA DE CONTACTO</th>
                    <th>CIUDAD</th>
                    <th>CONDICIÓN DE PAGO</th>
                    <th>OPCIONES</th>
                </tr>
            </thead>

            {{-- Inicio listar datos --}}
            @foreach($cliente as $cli)
                <tbody>
                    <tr class="text-center">
                        <td>{{ $cli->nit }}</td>
                        <td>{{ $cli->razon_social }}</td>
                        <td>{{ $cli->direccion }}</td>
                        <td>{{ $cli->telefono }}</td>
                        <td>{{ $cli->correo }}</td>
                        <td>{{ $cli->persona_contacto }}</td>
                        <td>{{ $cli->ciudad }}</td>
                        <td>{{ $cli->plazo }}</td>

                        {{-- Inicio opciones --}}
                        <td>
                            @can('cliente.edit')
                                <a href="{{ URL::action('ClienteController@edit',$cli->id_cliente) }}" class="btn btn-info"><i class="fas fa-edit"></i></a>
                            @endcan
                            @can('cliente.destroy')
                                <a href="#" data-target="#modal-delete-{{ $cli->id_cliente }}" data-toggle="modal" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                            @endcan
                        </td>
                        {{-- Fin opciones --}}
                    </tr>
                    @include('comercial.cliente.modal')
                </tbody>
            @endforeach
            {{-- Fin listar datos --}}
        </table>
    </div>
    {{ $cliente->render() }}
</div>
{{-- Fin tabla clientes --}}
@endsection