@extends('layouts.admin')
@section('contenido')

{{-- Inicio título página --}}
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE MATERIALES
    </h3>
</div>
{{-- Fin título página --}}

{{-- Inicio encabezado --}}
<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs">
        <li>
            <a href="{{ url('almacen/materiales/create') }}"><i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR MATERIAL</a>
        </li>
    </ul>
</div>
{{-- Fin encabezado --}}

{{-- Inicio buscar --}}
@include('almacen.materiales.search')
{{-- Fin buscar --}}

{{-- Inicio tabla materiales --}}
<div class="container-fluid">
    <div class="table-responsive">
        <table class="table table-dark table-sm">
            <thead>
                <tr class="text-center roboto-medium">
                    <th>NOMBRE DEL MATERIAL</th>
                    <th>UNIDAD DE MEDIDA</th>
                    <th>CATEGORÍA</th>
                    <th>OPCIONES</th>
                </tr>
            </thead>

            {{-- Inicio listar datos --}}
            @foreach($material as $mat)
            <tbody>
                <tr class="text-center">
                    <td>{{ $mat->nombre_material }}</td>
                    <td>{{ $mat->unidad_medida }}</td>
                    <td>{{ $mat->categoria }}</td>

                    {{-- Inicio opciones --}}
                    <td>
                        @can('materiales.show')
                            <a href="{{ URL::action('MaterialController@show', $mat->id_material) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                        @endcan
                        @can('materiales.edit')
                            <a href="{{ URL::action('MaterialController@edit', $mat->id_material) }}" class="btn btn-dark"><i class="fas fa-edit"></i></a>
                        @endcan
                        @can('materiales.destroy')
                            <a href="#" data-target="#modal-delete-{{ $mat->id_material }}" data-toggle="modal" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                        @endcan
                    </td>
                    {{-- Fin opciones --}}
                </tr>
                @include('almacen.materiales.modal')
            </tbody>
            @endforeach
            {{-- Fin listar datos --}}
        </table>
    </div>
    {{ $material->render() }}
</div>
{{-- Fin tabla materiales --}}
@endsection