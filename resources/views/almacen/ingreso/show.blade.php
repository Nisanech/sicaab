@extends('layouts.admin')
@section('contenido')

{{-- Inicio título página --}}
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-eye fa-fw"></i> &nbsp; DETALLE INGRESO DE MATERIAL <strong>No. {{ $ingreso->id_ingreso }} / {{ $ingreso->fecha }}</strong>
    </h3>
</div>
{{-- Fin título página --}}

{{-- Inicio contenido --}}
<div class="container-fluid">
    <div class="form-neon" autocomplete="off">
        <fieldset>
            <legend><i class="fas fa-shopping-cart"></i> &nbsp; Información de Compra</legend>
            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="form-group">
                            <label for="fecha"><strong>Fecha de Ingreso</strong></label>
                            <p class="form-control">{{ $ingreso->fecha }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="form-group">
                            <label for="num_factura"><strong>Número de Factura</strong></label>
                            <p class="form-control">{{ $ingreso->num_factura }}</p>
                        </div>
                    </div>
                </div>
                <br>
            </div>

            {{-- Inicio tabla detalle requerimiento de compra --}}
            <legend><i class="fas fa-boxes fa-fw"></i> &nbsp; Detalle Ingreso de Material</legend>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <br>
                        <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                            <thead style="background-color: #275877; text-align: center">
                                <th>MATERIAL</th>
                                <th>CANTIDAD</th>
                                <th>($) VALOR UNITARIO</th>
                                <th>($) SUBTOTAL</th>
                            </thead>
                            <tfoot>
                                <th style="text-align: right">IVA</th>
                                <th><h4 id="iva" style="text-align: center">$ {{ $ingreso->iva }}</h4></th>
                                <th style="text-align: right">TOTAL</th>
                                <th><h4 id="total" style="text-align: center">$ {{ $ingreso->total }}</h4></th>
                            </tfoot>
                            <tbody style="text-align: center">
                                @foreach ($detalles as $det)
                                    <tr>
                                        <td>{{ $det->nombre_material }}</td>
                                        <td>{{ $det->cantidad }}</td>
                                        <td>$ {{ $det->vlr_compra }}</td>
                                        <td>$ {{ $det->cantidad * $det->vlr_compra }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- Fin tabla detalle requerimiento de compra --}}

            {{-- Inicio botones --}}
            <br>
            <p class="text-center">
                <a type="reset" href="{{ url('almacen/ingreso') }}" class="btn btn-raised btn-success btn-sm"><i class="fas fa-check-circle"></i> &nbsp; ACEPTAR</a>
            </p>
            {{-- Fin botones --}}
        </fieldset>
    </div>
</div>
{{-- Fin contenido --}}
@endsection