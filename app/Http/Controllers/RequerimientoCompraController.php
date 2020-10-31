<?php

namespace sicaab\Http\Controllers;

use Illuminate\Http\Request;
use sicaab\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use sicaab\Http\Requests\RequerimientoCompraFormRequest;
use sicaab\RequerimientoCompra;
use sicaab\DetalleRequerimientoCompra;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;

class RequerimientoCompraController extends Controller
{
    //Constructor
    public function __contruct()
    {
        $this->middleware('permission:requerimiento_compra.index')->only('index');
        $this->middleware('permission:requerimiento_compra.create')->only(['create', 'store']);
        $this->middleware('permission:requerimiento_compra.show')->only('show');
        $this->middleware('permission:requerimiento_compra.edit')->only(['edit', 'update']);
        $this->middleware('permission:requerimiento_compra.destroy')->only('destroy');
    }

    public function index(Request $request)
    {
        if($request)
        {
            $query=trim($request->get('buscarpor'));
            $requerimiento=DB::table('requerimiento_compra as rc')
                            ->join('proveedor as prove', 'rc.id_proveedor', '=', 'prove.id_proveedor')
                            ->join('detalle_requerimiento_compra as drc', 'rc.id_requerimiento', '=', 'drc.id_requerimiento')
                            ->select('prove.razon_social', 'rc.id_requerimiento', 'rc.fecha', 'rc.estado')
                            ->where('rc.id_requerimiento', 'LIKE', '%'.$query.'%')
                            ->orWhere('prove.razon_social', 'LIKE', '%'.$query.'%')
                            ->orderBy('rc.id_requerimiento', 'asc')
                            ->groupBy('rc.id_requerimiento', 'rc.fecha', 'prove.razon_social', 'rc.estado')
                            ->paginate(10);

            return view('almacen.requerimiento_compra.index', ["requerimiento"=>$requerimiento, "buscarpor"=>$query]);
        }
    }

    public function create()
    {
        $proveedor=DB::table('proveedor as prove')
                    ->where('categoria', '=', 'Material')
                    ->join('categoria_proveedor as cat', 'prove.id_categoriaproveedor', '=', 'cat.id_categoriaproveedor')
                    ->select('prove.razon_social', 'prove.id_proveedor')
                    ->get();
        
        $pago=DB::table('condicion_pago as cp')
                    ->select('cp.tipo', 'cp.plazo', 'cp.id_pago')
                    ->get();
        
        $material=DB::table('material as mat')
                    ->join('categoria_material as cat', 'mat.id_categoriamaterial', '=', 'cat.id_categoriamaterial')
                    ->select(DB::raw('CONCAT(mat.nombre_material, " ", cat.categoria) AS material'), 'mat.id_material')
                    ->get();

        return view("almacen.requerimiento_compra.create", ["proveedor"=>$proveedor, "pago"=>$pago, "material"=>$material]);
    }

    public function store(RequerimientoCompraFormRequest $request)
    {
        
        try {

            // Inicio transacción
            DB::beginTransaction();

            // Campos requerimiento compra

            $requerimiento=new RequerimientoCompra();
            $requerimiento->id_proveedor=$request->get('id_proveedor');
            $mytime=Carbon::now('America/Bogota');
            $requerimiento->fecha=$mytime->toDateTimeString();
            $requerimiento->estado='Abierto';
            $requerimiento->id_pago=$request->get('id_pago');
            $requerimiento->save();

            // Campos detalle requerimiento compra

            $id_material=$request->get('id_material');
            $cantidad=$request->get('cantidad');
            $vlr_unitario=$request->get('vlr_unitario');

            $cont=0;  // Contador del array

            // Array para almacenar los materiales

            while ($cont<count($id_material)) {
                $detalle=new DetalleRequerimientoCompra();
                $detalle->id_requerimiento=$requerimiento->id_requerimiento;
                $detalle->id_material=$id_material[$cont];
                $detalle->cantidad=$cantidad[$cont];
                $detalle->vlr_unitario=$vlr_unitario[$cont];
                $detalle->save();
                $cont=$cont+1;
            }

            // Confirma la transacción si no hay errores
            DB::commit();

        } catch (\Exception $e) {
            // Si hay error anula la transacción
            DB::rollback();
            // Fin transacción
        }

        return Redirect::to('almacen/requerimiento_compra')
        ->with('success', 'Requerimiento de compra creado correctamente');
    }

    public function show($id)
    {
        $requerimientos=DB::table('requerimiento_compra as rc')
                            ->join('proveedor as prove', 'rc.id_proveedor', '=', 'prove.id_proveedor')
                            ->join('condicion_pago as cp', 'rc.id_pago', '=', 'cp.id_pago')
                            ->join('detalle_requerimiento_compra as drc', 'rc.id_requerimiento', '=', 'drc.id_requerimiento')
                            ->select('prove.razon_social', 'cp.plazo', 'rc.id_requerimiento', 'rc.fecha', 'rc.estado',
                                      DB::raw('sum(drc.cantidad * vlr_unitario) as subtotal'),
                                      DB::raw('((sum(drc.cantidad * vlr_unitario)) * 0.19) as iva'),
                                      DB::raw('((sum(drc.cantidad * vlr_unitario)) + ((sum(drc.cantidad * vlr_unitario)) * 0.19)) as total'))
                            ->where('rc.id_requerimiento','=',$id)
                            ->groupBy('rc.id_requerimiento')
                            ->first();

        $detalles=DB::table('detalle_requerimiento_compra as drc')
                    ->join('material as mat', 'drc.id_material', '=', 'mat.id_material')
                    ->select('mat.nombre_material', 'drc.cantidad', 'drc.vlr_unitario')
                    ->where('drc.id_requerimiento', '=', $id)
                    ->get();

        return view("almacen.requerimiento_compra.show", ["requerimientos"=>$requerimientos, "detalles"=>$detalles]);
    }

    public function destroy($id)
    {
        $requerimientos=RequerimientoCompra::findOrFail($id);
        $requerimientos->estado='Anulado';
        $requerimientos->update();

        return Redirect::to('almacen/requerimiento_compra')
        ->with('success', 'Requerimiento de compra anulado correctamente');
    }
}
