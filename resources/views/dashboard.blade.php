@extends('layouts.admin')

@section('contenido')

<div class="full-box page-header"></div>

{{-- Inicio Contenido --}}
<div class="container-fluid">
    <div class="form-neon" autocomplete="off">
        <fieldset>
            <legend><i class="fas fa-tachometer-alt"></i> &nbsp; Dashboard</legend>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                ¡Bienvenido!
            </div>
        </fieldset>
    </div>
</div>
@endsection