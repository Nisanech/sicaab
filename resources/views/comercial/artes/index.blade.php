@extends('layouts.admin')
@section('contenido')

{{-- Inicio título página --}}
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE ARTES
    </h3>
</div>
{{-- Fin título página --}}

{{-- Inicio encabezado --}}
<div class="container-fluid">
    <div class="full-box list-unstyled page-nav-tabs">
        <li>
            <a href="{{ url('comercial/artes/create') }}"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR ARTE</a>
        </li>
    </div>
</div>
{{-- Fin encabezado --}}

{{-- Inicio buscar --}}
@include('comercial.artes.search')
{{-- Fin buscar --}}

{{-- Inicio tabla artes --}}
<div class="container-fluid">
    <div class="table-responsive">
        <table class="table table-dark table-sm">
            <thead>
                <tr class="text-center roboto-medium">
                    <th>NOMBRE DEL PRODUCTO</th>
                    <th>IMAGEN</th>
                    <th>CLIENTE</th>
                    <th>ESTADO</th>
                    <th>OPCIONES</th>
                </tr>
            </thead>

            {{-- Inicio listar datos --}}
            @foreach ($arte as $art)
                <tbody>
                    <tr class="text-center">
                        <td>{{ $art->nombre_producto }}</td>
                        <td>
                            <img src="{{ asset('imagenes/artes/'.$art->imagen) }}" alt="{{ $art->nombre_producto }}" height="100px" width="100px" class="img-thumbnail">
                        </td>
                        <td>{{ $art->cliente }}</td>
                        <td>{{ $art->estado }}</td>

                        {{-- Inicio opciones --}}
                        <td>
                            @can('artes.show')
                                <a href="{{ URL::action('ArteProductoController@show', $art->id_arte) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                            @endcan
                            @can('artes.edit')
                                <a href="{{ URL::action('ArteProductoController@edit', $art->id_arte) }}" class="btn btn-dark"><i class="fas fa-edit"></i></a>
                            @endcan
                            @can('artes.destroy')
                                <a href="#" data-target="#modal-delete-{{ $art->id_arte }}" data-toggle="modal" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                            @endcan
                        </td>
                        {{-- Fin opciones --}}
                    </tr>
                    @include('comercial.artes.modal')
                </tbody>
            @endforeach
            {{-- Fin listar datos --}}
        </table>
    </div>
    {{ $arte->render() }}
</div>
{{-- Fin tabla artes --}}
@endsection