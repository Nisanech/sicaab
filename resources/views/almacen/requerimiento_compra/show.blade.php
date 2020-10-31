@extends('layouts.admin')
@section('contenido')

{{-- Inicio título página --}}
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-eye fa-fw"></i> &nbsp; DETALLE REQUERIMIENTO DE COMPRA <strong>No. {{ $requerimientos->id_requerimiento }} / {{ $requerimientos->fecha }}</strong>
    </h3>
</div>
{{-- Fin título página --}}

{{-- Inicio contenido --}}
<div class="container-fluid">
    <div class="form-neon" autocomplete="off">
        <fieldset>
            <legend><i class="fas fa-user fa-fw"></i> &nbsp; Información Proveedor</legend>
            <br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="form-group">
                            <label for="id_proveedor"><strong>Proveedor</strong></label>
                            <p class="form-control">{{ $requerimientos->razon_social }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="form-group">
                            <label for="id_pago"><strong>Condición de Pago</strong></label>
                            <p class="form-control">{{ $requerimientos->plazo }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="form-group">
                            <label for="fecha"><strong>Fecha Requerimiento</strong></label>
                            <p class="form-control">{{ $requerimientos->fecha }}</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="form-group">
                            <label for="estado"><strong>Estado</strong></label>
                            <p class="form-control">{{ $requerimientos->estado }}</p>
                        </div>
                    </div>
                </div>
                <br>
            </div>

            {{-- Inicio tabla detalle requerimiento de compra --}}
            <legend><i class="fas fa-boxes fa-fw"></i> &nbsp; Detalle Requerimiento de Compra</legend>
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
                                <th><h4 id="iva" style="text-align: center">$ {{ $requerimientos->iva }}</h4></th>
                                <th style="text-align: right">TOTAL</th>
                                <th><h4 id="total" style="text-align: center">$ {{ $requerimientos->total }}</h4></th>
                            </tfoot>
                            <tbody style="text-align: center">
                                @foreach ($detalles as $det)
                                    <tr>
                                        <td>{{ $det->nombre_material }}</td>
                                        <td>{{ $det->cantidad }}</td>
                                        <td>$ {{ $det->vlr_unitario }}</td>
                                        <td>$ {{ $det->cantidad * $det->vlr_unitario }}</td>
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
                <a type="reset" href="{{ url('almacen/requerimiento_compra') }}" class="btn btn-raised btn-success btn-sm"><i class="fas fa-check-circle"></i> &nbsp; ACEPTAR</a>
            </p>
            {{-- Fin botones --}}
        </fieldset>
    </div>
</div>
{{-- Fin contenido --}}
@endsection