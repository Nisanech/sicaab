@extends('layouts.admin')
@section('contenido')
    
{{-- Inicio título página --}}
<div class="full-box page-header">
    <h3 class="text-left">
        <i class="fas fa-plus fa-fw"></i> &nbsp; AGREGAR REQUERIMIENTO DE COMPRA
    </h3>
</div>
{{-- Fin título página --}}

{{-- Inicio contenido --}}
<div class="container-fluid">
    <div class="form-neon" autocomplete="off">
        <fieldset>
            <legend><i class="fas fa-user fa-fw"></i> &nbsp; Información Proveedor</legend>

            {{-- Inicio validación de campos --}}
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{-- Fin validación de campos --}}

            {{-- Inicio formulario --}}
            {!! Form::open(array('url'=>'almacen/requerimiento_compra', 'method'=>'POST', 'autocomplete'=>'off', 'files'=>'true')) !!}
            {{ Form::token() }}

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="id_proveedor" class='bmd-label-floating'>Proveedor</label>
                            &nbsp;
                            <select name="id_proveedor" id="id_proveedor" class="form-control">
                                @foreach ($proveedor as $prove)
                                    <option value="{{ $prove->id_proveedor }}">{{ $prove->razon_social }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="id_pago" class="bmd-label-floating">Condición de Pago</label>
                            &nbsp;
                            <select name="id_pago" id="id_pago" class="form-control">
                                @foreach ($pago as $cp)
                                    <option value="{{ $cp->id_pago }}">{{ $cp->plazo }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="fecha" class="bmd-label-floating">Fecha</label>
                            &nbsp;
                            <input type="datetime" name="fecha" class="form-control" placeholder="dd-mm-aaaa hh:mm">
                        </div>
                    </div>
                </div>
                <legend><i class="fas fa-boxes fa-fw"></i> &nbsp; Detalle Requerimiento de Compra</legend>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="id_material" class="bmd-label-floating">Material</label>
                                <select name="pid_material" id="pid_material" class="form-control selectpicker" data-live-search="true">
                                    @foreach ($material as $mat)
                                        <option value="{{ $mat->id_material }}">{{ $mat->material }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="form-group">
                                <label for="cantidad">Cantidad</label>
                                <input type="number" name="pcantidad" id="pcantidad" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="form-group">
                                <label for="vlr_unitario">($) Valor Unitario</label>
                                <input type="number" name="pvlr_unitario" id="pvlr_unitario" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 col-md-2">
                            <div class="form-group">
                                <button type="button" id="btn_add" class="btn btn-raised btn-primary btn-sm">Agregar</button>
                            </div>
                        </div>
                        <br>
                        {{-- Inicio tabla detalle requerimiento de compra --}}
                        <div class="col-12 col-md-12">
                            <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                                <thead style="background-color: #275877; text-align: center">
                                    <th>OPCIONES</th>
                                    <th>MATERIAL</th>
                                    <th>CANTIDAD</th>
                                    <th>($) VALOR UNITARIO</th>
                                    <th>($) SUBTOTAL</th>
                                </thead>
                                <tfoot>
                                    <th></th>
                                    <th style="text-align: right">($) IVA (19%)</th>
                                    <th><h4 id="iva" style="text-align: center">$ 0.00</h4></th>
                                    <th style="text-align: right">($) TOTAL</th>
                                    <th><h4 id="total" style="text-align: center">$ 0.00</h4></th>
                                </tfoot>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                        {{-- Fin tabla detalle requerimiento de compra --}}
                    </div>

                    {{-- Inicio botones --}}
                    {{-- Token para transacciones --}}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <br>
                    <p class="text-center">
                        <a type="reset" href="{{url('almacen/requerimiento_compra')}}" class="btn btn-raised btn-danger btn-sm"><i class="fas fa-window-close"></i> &nbsp; CANCELAR</a>    
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit" class="btn btn-raised btn-info btn-sm" id="guardar"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
                    </p>
                    {{-- Fin botones --}}
                </div>
            </div>
            {!! Form::close() !!}
            {{-- Fin formulario --}}
        </fieldset>
    </div>
</div>
{{-- Fin contenido --}}

{{-- Inicio javascript agregar material al detalle --}}
@push('scripts')
    <script>
        // Función botón agregar
        $(document).ready(function(){
            $('#btn_add').click(function(){
                agregar();
            });
        });

        // Variables
        var cont=0; // Contador
        iva = 0;
        tasa = 19;
        total = 0;
        subtotal = []; // Array para guardar el subtotal de cada material agregado al detalle
        $("#guardar").hide();

        // Función agregar material al detalle
        function agregar()
        {
            id_material=$("#pid_material").val();
            material=$("#pid_material option:selected").text();
            cantidad=$("#pcantidad").val();
            vlr_unitario=$("#pvlr_unitario").val();

            // Validación
            if(id_material!="" && cantidad!="" && cantidad>0 && vlr_unitario!="" && vlr_unitario>0)
            {
                subtotal[cont]=(cantidad * vlr_unitario);
                iva=(Number(iva) + Number(((subtotal[cont] * tasa)/100))).toFixed(2);
                total=(Number(total) + Number((((subtotal[cont] * tasa)/100) + subtotal[cont]))).toFixed(2);

                // Agregar filas
                var fila='<tr style="text-align:center" class="selected" id="fila'+cont+'"><td><button type="button" class="btn btn-danger" value="eliminar" onclick="eliminar('+cont+');"><i class="fas fa-minus-square"></i></button></td><td><input type="hidden" name="id_material[]" value="'+id_material+'">'+material+'</td><td><input name="cantidad[]" value="'+cantidad+'" class="input-group-text"></td><td><input name="vlr_unitario[]" value="'+vlr_unitario+'" class="input-group-text"></td><td>$ '+subtotal[cont]+'</td></tr>';
                cont++;

                limpiar();

                $('#total').html("$ " + total);
                $('#iva').html("$ " + iva);

                evaluar();
                $('#detalles').append(fila);
            }
            else
            {
                alert("Error al agregar el material al detalle de compra. Por favor, revisa los datos ingresados");
            }
        }

        // Función para quitar un material agregado al detalle
        function limpiar()
        {
            $("#pcantidad").val("");
            $("#pvlr_unitario").val("");
        }

        // Función ocultar botones si no hay datos en el detalle
        function evaluar()
        {
            if(total>0)
            {
                $("#guardar").show();
            }
            else
            {
                $("#guardar").hide();
            }
        }

        // Función eliminar filas
        function eliminar(index)
        {
            total=(Number(total) - Number(((subtotal[index] * tasa)/100) + subtotal[index])).toFixed(2);
            iva=(Number(iva) - Number((subtotal[index] * tasa)/100)).toFixed(2);
            $("#total").html("$ " + total);
            $("#iva").html("$ " + iva);
            $("#fila" + index).remove();
            evaluar();
        }
    </script>
@endpush
{{-- Fin javascript agregar material al detalle --}}
@endsection