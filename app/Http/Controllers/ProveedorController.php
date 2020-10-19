<?php

namespace sicaab\Http\Controllers;

use Illuminate\Http\Request;
use sicaab\Http\Requests;
use sicaab\Proveedor;
use Illuminate\Support\Facades\Redirect;
use sicaab\Http\Requests\ProveedorFormRequest;
use Illuminate\Support\Facades\DB;

class ProveedorController extends Controller
{
    //Constructor
    public function __construct()
    {
        $this->middleware('permission:proveedores.index')->only('index');
        $this->middleware('permission:proveedores.create')->only(['create', 'store']);
        $this->middleware('permission:proveedores.show')->only('show');
        $this->middleware('permission:proveedores.edit')->only(['edit', 'update']);
        $this->middleware('permission:proveedores.destroy')->only('destroy');
    }

    public function index(Request $request)
    {
        // Listar datos
        if ($request) 
        {
            $query = trim($request->get('buscarpor'));
            $proveedor = DB::table('proveedores as prove')
                            ->join('condiciones_pago as pag','prove.id_pago','=','pag.id_pago')
                            ->select('prove.id_proveedor','prove.nit','prove.razon_social','prove.direccion','prove.telefono','prove.correo','prove.persona_contacto','prove.tipo','pag.plazo')
                            ->where('razon_social','LIKE','%'.$query.'%')
                            ->orWhere('nit','LIKE','%'.$query.'%')
                            ->orderBy('razon_social','asc')
                            ->paginate(10);
            
            return view('comercial.proveedores.index', ["proveedor"=>$proveedor, "buscarpor"=>$query]);
        }
    }

    public function create()
    {
        $pago=DB::table('condiciones_pago')->get();
        
        return view("comercial.proveedores.create", ["pago"=>$pago]);
    }

    public function store(ProveedorFormRequest $request)
    {
        $proveedor = new Proveedor;
        $proveedor->nit=$request->get('nit');
        $proveedor->razon_social=$request->get('razon_social');
        $proveedor->direccion=$request->get('direccion');
        $proveedor->telefono=$request->get('telefono');
        $proveedor->correo=$request->get('correo');
        $proveedor->persona_contacto=$request->get('persona_contacto');
        $proveedor->tipo=$request->get('tipo');
        $proveedor->id_pago=$request->get('id_pago');
        $proveedor->save();

        return Redirect::to('comercial/proveedores')
        ->with('success','Proveedor creado correctamente');
    }

    public function show($id)
    {
        return view("comercial.proveedores.show", ["proveedor"=>Proveedor::findOrFail($id)]);
    }

    public function edit($id)
    {
        $proveedor=Proveedor::findOrFail($id);
        $pago=DB::table('condiciones_pago')->get();

        return view("comercial.proveedores.edit", ["proveedor"=>$proveedor, "pago"=>$pago]);
    }

    public function update(ProveedorFormRequest $request, $id)
    {
        $proveedor=Proveedor::findOrFail($id);
        $proveedor->nit=$request->get('nit');
        $proveedor->razon_social=$request->get('razon_social');
        $proveedor->direccion=$request->get('direccion');
        $proveedor->telefono=$request->get('telefono');
        $proveedor->correo=$request->get('correo');
        $proveedor->persona_contacto=$request->get('persona_contacto');
        $proveedor->tipo=$request->get('tipo');
        $proveedor->id_pago=$request->get('id_pago');
        $proveedor->update();

        return Redirect::to('comercial/proveedores')
        ->with('success','Proveedor actualizado correctamente');
    }

    public function destroy($id)
    {
        $proveedor=Proveedor::findOrFail($id);
        $proveedor->delete();

        return Redirect::to('comercial/proveedores')
        ->with('success', 'Proveedor eliminado correctamente');
    }
}
