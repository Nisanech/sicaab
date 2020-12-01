@extends('layouts.admin')
@section('contenido')

{{-- Inicio título página --}}
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; INGRESO DE MATERIALES
    </h3>
</div>
{{-- Fin título página --}}

{{-- Inicio encabezado --}}
<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs">
        <li>
            <a href="{{ url('almacen/ingreso/create') }}"><i class="fas fa-plus fa-fw"></i> &nbsp; INGRESAR MATERIAL</a>
        </li>
        <li>
            <a href="{{ url('almacen/materiales') }}"><i class="fas fa-undo"></i> &nbsp; MATERIALES</a>
        </li>
    </ul>
</div>
{{-- Fin encabezado --}}

{{-- Inicio buscar --}}
@include('almacen.ingreso.search')
{{-- Fin buscar --}}

{{-- Inicio tabla ingresos --}}
<div class="container-fluid">
    <div class="table-responsive">
        <table class="table table-dark table-sm">
            <thead>
                <tr class="text-center roboto-medium">
                    <th>ID INGRESO</th>
                    <th>FECHA</th>
                    <th>FACTURA</th>
                    <th>OPCIONES</th>
                </tr>
            </thead>

            {{-- Inicio listar datos --}}
            @foreach($ingresos as $ing)
            <tbody>
                <tr class="text-center">
                    <td>{{ $ing->id_ingreso }}</td>
                    <td>{{ $ing->fecha }}</td>
                    <td>{{ $ing->num_factura }}</td>

                    {{-- Inicio opciones --}}
                    <td>
                        @can('ingreso.show')
                            <a href="{{ URL::action('IngresoMaterialController@show', $ing->id_ingreso) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                        @endcan
                    </td>
                    {{-- Fin opciones --}}
                </tr>
            </tbody>
            @endforeach
            {{-- Fin listar datos --}}
        </table>
    </div>
    {{ $ingresos->render() }}
</div>
{{-- Fin tabla ingresos --}}
@endsection