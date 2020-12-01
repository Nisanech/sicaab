@extends('layouts.admin')
@section('contenido')

{{-- Inicio título página --}}
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-clipboard-list fa-fw"></i> &nbsp; LISTA DE USUARIOS
    </h3>
</div>
{{-- Fin título página --}}

{{-- Inicio encabezado --}}
<div class="container-fluid">
    <ul class="full-box list-unstyled page-nav-tabs">
    </ul>
</div>
{{-- Fin encabezado --}}

{{-- Inicio buscar --}}
@include('administrador.usuarios.search')
{{-- Fin buscar --}}

{{-- Inicio tabla clientes --}}
<div class="container-fluid">
    <div class="table-responsive">
        <table class="table table-dark table-sm">
            <thead>
                <tr class="text-center roboto-medium">
                    <th>ID USUARIO</th>
                    <th>NOMBRE USUARIO</th>
                    <th>CORREO</th>
                    <th>OPCIONES</th>
                </tr>
            </thead>

            {{-- Inicio listar datos --}}
            @foreach($users as $user)
                <tbody>
                    <tr class="text-center">
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>

                        {{-- Inicio opciones --}}
                        <td>
                            @can('users.show')
                                <a href="{{ URL::action('UserController@show',$user->id) }}" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                            @endcan
                            {{-- @can('user.edit')
                                <a href="{{ URL::action('UserController@edit',$user->id) }}" class="btn btn-dark"><i class="fas fa-edit"></i></a>
                            @endcan --}}
                            {{-- @can('user.destroy')
                                <a href="#" data-target="#modal-delete-{{ $user->id }}" data-toggle="modal" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                            @endcan --}}
                        </td>
                        {{-- Fin opciones --}}
                    </tr>
                    @include('administrador.usuarios.modal')
                </tbody>
            @endforeach
            {{-- Fin listar datos --}}
        </table>
    </div>
    {{-- {{ $cliente->render() }} --}}
</div>
{{-- Fin tabla clientes --}}
@endsection