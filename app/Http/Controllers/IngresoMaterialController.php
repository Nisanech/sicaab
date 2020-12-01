<?php

namespace sicaab\Http\Controllers;

use Illuminate\Http\Request;
use sicaab\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use sicaab\Http\Requests\IngresoMaterialFormRequest;
use sicaab\IngresoMaterial;
use sicaab\DetalleIngresoMaterial;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;

class IngresoMaterialController extends Controller
{
    // Constructor
    public function __construct()
    {
        $this->middleware('permission:ingreso.index')->only('index');
        $this->middleware('permission:ingreso.create')->only(['create', 'store']);
        $this->middleware('permission:ingreso.show')->only('show');
    }

    public function index(Request $request)
    {
        if($request)
        {
            $query=trim($request->get('buscarpor'));
            $ingresos=DB::table('ingreso_material as in')
                        ->join('detalle_ingreso_material as din', 'in.id_ingreso', '=', 'din.id_ingreso')
                        ->select('in.id_ingreso', 'in.num_factura', 'in.fecha')
                        ->where('in.num_factura', 'LIKE', '%'.$query.'%')
                        ->orWhere('in.fecha', 'LIKE', '%'.$query.'%')
                        ->orderBy('in.id_ingreso', 'desc')
                        ->groupBy('in.id_ingreso', 'in.num_factura', 'in.fecha')
                        ->paginate(10);
            
            return view('almacen.ingreso.index', ["ingresos"=>$ingresos, "buscarpor"=>$query]);
        }
    }

    public function create()
    {
        $material=DB::table('material as mat')
                    ->select('mat.nombre_material', 'mat.id_material')
                    ->get();

        return view("almacen.ingreso.create", ["material"=>$material]);
    }

    public function store(IngresoMaterialFormRequest $request)
    {
        try 
        {
            DB::beginTransaction();
            $ingreso=new IngresoMaterial();
            $ingreso->num_factura=$request->get('num_factura');
            $mytime=Carbon::now('America/Bogota');
            $ingreso->fecha=$mytime->toDateString();
            $ingreso->save();

            $id_material=$request->get('id_material');
            $cantidad=$request->get('cantidad');
            $vlr_compra=$request->get('vlr_compra');

            $cont=0;

            while ($cont < count($id_material)) {
                $detalle=new DetalleIngresoMaterial();
                $detalle->id_ingreso=$ingreso->id_ingreso;
                $detalle->id_material=$id_material[$cont];
                $detalle->cantidad=$cantidad[$cont];
                $detalle->vlr_compra=$vlr_compra[$cont];
                $detalle->save();
                $cont=$cont+1;
            }
            DB::commit();

        } 
        catch (\Exception $e) 
        {
            
            DB::rollBack();
        }

        return Redirect::to('almacen/ingreso')
        ->with('success', 'Ingreso correcto');
    }

    public function show($id)
    {
        $ingreso=DB::table('ingreso_material as in')
                        ->join('detalle_ingreso_material as din', 'in.id_ingreso', '=', 'din.id_ingreso')
                        ->select('in.id_ingreso', 'in.num_factura', 'in.fecha',
                                    DB::raw('sum(din.cantidad * vlr_compra) as subtotal'),
                                    DB::raw('((sum(din.cantidad * vlr_compra)) * 0.19) as iva'),
                                    DB::raw('((sum(din.cantidad * vlr_compra)) + ((sum(din.cantidad * vlr_compra)) * 0.19)) as total')
                                )
                        ->where('in.id_ingreso', '=', $id)
                        ->groupBy('in.id_ingreso')
                        ->first();

        $detalles=DB::table('detalle_ingreso_material as din')
                    ->join('material as mat', 'din.id_material', '=', 'mat.id_material')
                    ->select('mat.nombre_material', 'din.cantidad', 'din.vlr_compra')
                    ->where('din.id_ingreso', '=', $id)
                    ->get();
        
        return view("almacen.ingreso.show", ["ingreso"=>$ingreso, "detalles"=>$detalles]);
    }

    public function destroy($id)
    {

    }
}
