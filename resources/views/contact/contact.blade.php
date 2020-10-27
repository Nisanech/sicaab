@extends('layouts.admin')
@section('contenido')

{{-- Inicio título página --}}
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-mail-bulk"></i> &nbsp; ENVÍO DE CORREO
    </h3>
</div>
{{-- Fin título página --}}

{{-- Inicio contenido --}}
<div class="container-fluid">
    <div class="form-neon" autocomplete="off">
        <fieldset>
            <legend><i class="fas fa-envelope"></i> &nbsp; Evía tu Correo</legend>

            {{-- Inicio formulario --}}
            {!! Form::open(array('route'=>'contact', 'method'=>'POST')) !!}
            {!! Form::token() !!}

            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="name" class="bmd-label-floating">Remitente</label>
                            <input type="name" name="name" class="form-control">
                            {!! $errors->first('name', '<small>:message</small>') !!}
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="email" class="bmd-label-floating">Correo</label>
                            <input  name="email" class="form-control">
                            {!! $errors->first('email', '<small>:message</small>') !!}
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="subject" class="bmd-label-floating">Asunto</label>
                            <input type="subject" name="subject" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-12">
                        <div class="form-group">
                            <label for="content" class="bmd-label-floating">Mensaje</label>
                            <textarea name="content" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Inicio botones --}}
            <br>
            <p class="text-center">
                <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="fas fa-paper-plane"></i> &nbsp; ENVIAR</button>
            </p>
            {{-- Fin botones --}}

            {!! Form::close() !!}
            {{-- Fin formulario --}}
        </fieldset>
    </div>
</div>
{{-- Fin contenido --}}
    
@endsection
