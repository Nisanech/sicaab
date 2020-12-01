<?php

namespace sicaab\Http\Controllers;

use Illuminate\Http\Request;
use sicaab\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use sicaab\Http\Requests\OrdenCompraFormRequest;
use sicaab\OrdenCompra;
use sicaab\DetalleOrdenCompra;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;

class OrdenCompraController extends Controller
{
    // Constructor
    public function __construct()
    {
        $this->middleware('permission:orden_compra.index')->only('index');
        $this->middleware('permission:orden_compra.create')->only(['create', 'store']);
        $this->middleware('permission:orden_compra.show')->only('show');
        $this->middleware('permission:orden_compra.edit')->only(['edit', 'update']);
        $this->middleware('permission:orden_compra.destroy')->only('destroy');
    }

    public function index(Request $request)
    {
        if($request)
        {
            $query=trim($request->get('buscarpor'));
            $compra=DB::table('orden_compra as oc')
                        ->join('cliente as cli', 'oc.id_cliente', '=', 'cli.id_cliente')
                        ->join('detalle_orden_compra as doc', 'oc.id_ordencompra', '=', 'doc.id_ordencompra')
                        ->select('cli.razon_social', 'oc.num_orden', 'oc.fecha_solicitud', 'oc.estado', 'oc.id_ordencompra')
                        ->where('oc.num_orden', 'LIKE', '%'.$query.'%')
                        ->orWhere('cli.razon_social', 'LIKE', '%'.$query.'%')
                        ->orderBy('oc.fecha_solicitud', 'asc')
                        ->groupBy('cli.razon_social', 'oc.num_orden', 'oc.fecha_solicitud', 'oc.estado')
                        ->paginate(10);

            return view('comercial.orden_compra.index', ["compra"=>$compra, "buscarpor"=>$query]);
        }
    }

    public function create()
    {
        $cliente=DB::table('cliente as cli')
                    ->select('cli.razon_social', 'cli.id_cliente')
                    ->get();

        $pago=DB::table('condicion_pago as cp')
                    ->select('cp.tipo', 'cp.plazo', 'cp.id_pago')
                    ->get();

        $producto=DB::table('producto as pro')
                        ->join('arte_producto as art', 'pro.id_arte', '=', 'art.id_arte')
                        ->select('pro.id_producto', 'art.nombre_producto')
                        ->get();

        return view("comercial.orden_compra.create", ["cliente"=>$cliente, "pago"=>$pago, "producto"=>$producto]);
    }

    public function store(OrdenCompraFormRequest $request)
    {
        try{

            // Inicio transacción
            DB::beginTransaction();

            // Campos orden de compra
            $compra=new OrdenCompra();
            $compra->id_cliente=$request->get('id_cliente');
            $mytime=Carbon::now('Amercia/Bogota');
            $compra->fecha_solicitud=$mytime->toDateString();
            $compra->estado='Abierto';
            $compra->num_orden=$request->get('num_orden');
            $compra->id_pago=$request->get('id_pago');
            $compra->save();

            // Campos detalle orden de compra

            $id_producto=$request->get('id_producto');
            $cantidad=$request->get('cantidad');
            $vlr_unitario=$request->get('vlr_unitario');

            $cont=0; // Contador del array

            // Array para almacenar los productos

            while ($cont<count($id_producto)) {
                $detalle=new DetalleOrdenCompra();
                $detalle->id_ordencompra=$compra->id_ordencompra;
                $detalle->id_producto=$id_producto[$cont];
                $detalle->cantidad=$cantidad[$cont];
                $detalle->vlr_unitario=$vlr_unitario[$cont];
                $detalle->save();
                $cont=$cont+1;
            }

            // Confirma la transacción si no hay errores
            DB::commit();

        } catch (\Exception $e){

            // Si hay error anula la transacción
            DB::rollback();
        }

        return Redirect::to('comercial/orden_compra')
        ->with('success', 'Orden de compra creada correctamente');
    }

    public function show($id)
    {
        $compras=DB::table('orden_compra as oc')
                    ->join('cliente as cli', 'oc.id_cliente', '=', 'cli.id_cliente')
                    ->join('condicion_pago as cp', 'oc.id_pago', '=', 'cp.id_pago')
                    ->join('detalle_orden_compra as doc', 'oc.id_ordencompra', '=', 'doc.id_ordencompra')
                    ->join('producto as pro', 'doc.id_producto', '=', 'pro.id_producto')
                    ->select('cli.razon_social', 'cp.plazo', 'oc.num_orden', 'oc.fecha_solicitud', 'oc.fecha_entrega', 'oc.estado',
                                DB::raw('sum(doc.cantidad * pro.vlr_unitario) as subtotal'),
                                DB::raw('((sum(doc.cantidad * pro.vlr_unitario)) * 0.19) as iva'),
                                DB::raw('((sum(doc.cantidad * pro.vlr_unitario)) + ((sum(doc.cantidad * pro.vlr_unitario)) * 0.19)) as total'))
                    ->where('oc.id_ordencompra', '=', $id)
                    ->groupBy('oc.id_ordencompra')
                    ->first();

        $detalles=DB::table('detalle_orden_compra as doc')
                        ->join('producto as pro', 'doc.id_producto', '=', 'pro.id_producto')
                        ->join('arte_producto as art', 'pro.id_arte', '=', 'art.id_arte')
                        ->select('art.nombre_producto', 'doc.cantidad', 'pro.vlr_unitario')
                        ->where('doc.id_ordencompra', '=', $id)
                        ->get();

        return view("comercial.orden_compra.show", ["compras"=>$compras, "detalles"=>$detalles]);
    }

    public function destroy($id)
    {
        $compras=OrdenCompra::findOrFail($id);
        $compras->estado='Anulado';
        $compras->update();

        return Redirect::to('comercial/orden_compra')
        ->with('success', 'Orden de compra anulada correctamente');
    }
}
