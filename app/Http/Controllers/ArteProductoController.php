<?php

namespace sicaab\Http\Controllers;

use Illuminate\Http\Request;
use sicaab\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use sicaab\Http\Requests\ArteProductoFormRequest;
use sicaab\ArteProducto;
use Illuminate\Support\Facades\DB;

class ArteProductoController extends Controller
{
    //Constructor
    public function __construct()
    {
        $this->middleware('permission:artes.index')->only('index');
        $this->middleware('permission:artes.create')->only(['create', 'store']);
        $this->middleware('permission:artes.show')->only('show');
        $this->middleware('permission:artes.edit')->only(['edit', 'update']);
        $this->middleware('permission:artes.destroy')->only('destroy');
    }

    public function index(Request $request)
    {
        if($request)
        {
            $query=trim($request->get('buscarpor'));
            $arte=DB::table('arte_producto as art')
                    ->join('cliente as cli','art.id_cliente','=','cli.id_cliente')
                    ->join('categoria_producto as cp', 'art.id_categoriaproducto', '=', 'cp.id_categoriaproducto')
                    ->select('art.id_arte','art.nombre_producto','art.alto','art.largo','art.ancho','art.imagen','cli.razon_social as cliente','cp.categoria','art.estado')
                    ->where('art.nombre_producto','LIKE','%'.$query.'%')
                    ->orwhere('cli.razon_social','LIKE','%'.$query.'%')
                    ->orderBy('nombre_producto','asc')
                    ->paginate(10);
            
            return view('comercial.artes.index',["arte"=>$arte,"buscarpor"=>$query]);
        }
    }

    public function create()
    {
        $cliente=DB::table('cliente')->get();
        $categoria=DB::table('categoria_producto')->get();
        return view("comercial.artes.create",["cliente"=>$cliente, "categoria"=>$categoria]);
    }

    public function store(ArteProductoFormRequest $request)
    {
        $arte=new ArteProducto;
        $arte->id_arte=$request->get('id_arte');
        $arte->nombre_producto=$request->get('nombre_producto');
        $arte->alto=$request->get('alto');
        $arte->largo=$request->get('largo');
        $arte->ancho=$request->get('ancho');

        // Inicio Condicional para guardar la imagen del arte
        if($request->hasFile('imagen'))
        {
            $file=$request->file("imagen");
            $nombrearchivo=$file->getClientOriginalName();
            $file->move(public_path("imagenes/artes/"),$nombrearchivo);
            $arte->imagen=$nombrearchivo;
        }
        // Fin Condicional para guardar la imagen del arte

        $arte->id_cliente=$request->get('id_cliente');
        $arte->id_categoriaproducto=$request->get('id_categoriaproducto');
        $arte->estado='Activo';
        $arte->save();

        return Redirect::to('comercial/artes')
        ->with('success','Arte agregada correctamente');
    }

    public function show($id)
    {
        $arte=ArteProducto::findOrFail($id);
        $cliente=DB::table('cliente')->get();
        $categoria=DB::table('categoria_producto')->get();
        
        return view("comercial.artes.show",["arte"=>$arte, "cliente"=>$cliente, "categoria"=>$categoria]);
    }

    public function edit($id)
    {
        $arte=ArteProducto::findOrFail($id);
        $cliente=DB::table('cliente')->get();
        $categoria=DB::table('categoria_producto')->get();

        return view("comercial.artes.edit",["arte"=>$arte, "cliente"=>$cliente, "categoria"=>$categoria]);
    }

    public function update(ArteProductoFormRequest $request, $id)
    {
        $arte=ArteProducto::findOrFail($id);
        $arte->nombre_producto=$request->get('nombre_producto');
        $arte->alto=$request->get('alto');
        $arte->largo=$request->get('largo');
        $arte->ancho=$request->get('ancho');

        // Inicio Condicional para guardar la imagen del arte
        if($request->hasFile('imagen'))
        {
            $file=$request->file("imagen");
            $nombrearchivo=$file->getClientOriginalName();
            $file->move(public_path("imagenes/artes/"),$nombrearchivo);
            $arte->imagen=$nombrearchivo;
        }
        // Fin Condicional para guardar la imagen del arte

        $arte->id_cliente=$request->get('id_cliente');
        $arte->id_categoriaproducto=$request->get('id_categoriaproducto');
        $arte->estado='Activo';
        $arte->update();

        return Redirect::to('comercial/artes')
        ->with('success','Arte actualizada correctamente');
    }

    public function destroy($id)
    {
        $arte=ArteProducto::findOrFail($id);
        $arte->estado='Inactivo';
        $arte->update();

        return Redirect::to('comercial/artes')
        ->with('sucess','Eliminado correctamente');
    }
}
