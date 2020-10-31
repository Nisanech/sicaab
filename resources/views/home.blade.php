@extends('layouts.admin')

@section('contenido')

<div class="full-box page-header"></div>

{{-- Inicio Contenido --}}
<div class="container-fluid" >
    <div class="form-neon" autocomplete="off" style="background: none; border: none">
            
        <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <img src="{{ asset('img/welcome.png') }}" width="60%" height="60%" style="margin-left: 300px">
            </div>
    </div>
</div>
@endsection
