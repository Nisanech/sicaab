<?php

namespace sicaab\Http\Controllers;

use Illuminate\Http\Request;
use sicaab\Http\Requests;
use sicaab\Cliente;
use Illuminate\Support\Facades\Redirect;
use sicaab\Http\Requests\ClienteFormRequest;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    
    // Constructor
    public function __construct()
    {
        $this->middleware('permission:cliente.index')->only('index');
        $this->middleware('permission:cliente.create')->only(['create', 'store']);
        $this->middleware('permission:cliente.show')->only('show');
        $this->middleware('permission:cliente.edit')->only(['edit', 'update']);
        $this->middleware('permission:cliente.destroy')->only('destroy');
    }
    
    public function index(Request $request)
    {
        // Listar datos
        if($request)
        {
            $query = trim($request -> get('buscarpor'));
            $cliente = DB::table('clientes as cli')
                        ->join('condiciones_pago as pag','cli.id_pago','=','pag.id_pago')
                        ->select('cli.id_cliente','cli.nit','cli.razon_social','cli.direccion','cli.telefono','cli.correo','cli.persona_contacto','cli.ciudad','pag.plazo')
                        ->where('razon_social','LIKE','%'.$query.'%')
                        ->orWhere('nit','LIKE','%'.$query.'%')
                        ->orderBy('razon_social','asc')
                        ->paginate(10);
            return view('comercial.cliente.index', ["cliente" => $cliente, "buscarpor" => $query]);
        }
    }

    public function create()
    {
        $pago=DB::table('condiciones_pago')->get();
        return view("comercial.cliente.create",["pago"=>$pago]);
    }

    public function store(ClienteFormRequest $request)
    {
        $cliente = new Cliente;
        $cliente->nit=$request->get('nit');
        $cliente->razon_social=$request->get('razon_social');
        $cliente->direccion=$request->get('direccion');
        $cliente->telefono=$request->get('telefono');
        $cliente->correo=$request->get('correo');
        $cliente->persona_contacto=$request->get('persona_contacto');
        $cliente->ciudad=$request->get('ciudad');
        $cliente->id_pago=$request->get('id_pago');
        $cliente->save();

        return Redirect::to('comercial/cliente')
        ->with('success','Cliente creado correctamente');
    }

    public function show($id)
    {
        return view("comercial.cliente.show", ["cliente"=>Cliente::findOrFail($id)]);
    }

    public function edit($id)
    {
        $cliente=Cliente::findOrFail($id);
        $pago=DB::table('condiciones_pago')->get();
        return view("comercial.cliente.edit", ["cliente"=>$cliente, "pago"=>$pago]);
    }

    public function update(ClienteFormRequest $request, $id)
    {
        $cliente=Cliente::findOrFail($id);
        $cliente->nit=$request->get('nit');
        $cliente->razon_social=$request->get('razon_social');
        $cliente->direccion=$request->get('direccion');
        $cliente->telefono=$request->get('telefono');
        $cliente->correo=$request->get('correo');
        $cliente->persona_contacto=$request->get('persona_contacto');
        $cliente->ciudad=$request->get('ciudad');
        $cliente->id_pago=$request->get('id_pago');
        $cliente->update();

        return Redirect::to('comercial/cliente')
        ->with('success','Cliente actualizado correctamente');
    }

    public function destroy($id)
    {
        $cliente=Cliente::findOrFail($id);
        $cliente->delete();
        return Redirect::to('comercial/cliente')
        ->with('success', 'Eliminado correctamente');
    }
}
