<?php

namespace sicaab\Http\Controllers;

use Illuminate\Http\Request;
use sicaab\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use sicaab\Http\Requests\ProductoFormRequest;
use sicaab\Producto;
use Illuminate\Support\Facades\DB;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class ProductoController extends Controller
{
    // Constructor
    public function __construct()
    {
        $this->middleware('permission:productos.index')->only('index');
        $this->middleware('permission:productos.create')->only(['create', 'store']);
        $this->middleware('permission:productos.show')->only('show');
        $this->middleware('permission:productos.edit')->only(['edit', 'update']);
        $this->middleware('permission:productos.destroy')->only('destroy');
    }

    public function index(Request $request)
    {
        if($request)
        {
            $query = trim($request->get('buscarpor'));
            $producto = DB::table('productos as pro')
                        ->join('arte_productos as art','pro.id_arte','=','art.id_arte')
                        ->join('clientes as cli','art.id_cliente','=','cli.id_cliente')
                        ->select('pro.id_producto','art.nombre_producto','art.categoria','pro.vlr_unitario','cli.razon_social')
                        ->where('art.nombre_producto','LIKE','%'.$query.'%')
                        ->orwhere('cli.razon_social','LIKE','%'.$query.'%')
                        ->orderBy('razon_social','asc')
                        ->paginate(20);

                        return view('comercial.productos.index',["producto"=>$producto, "buscarpor"=>$query]);
        }
    }

    public function create()
    {
        $arte=DB::table('arte_productos')->get();
        $cliente=DB::table('clientes')->get();

        return view("comercial.productos.create",["arte"=>$arte, "cliente"=>$cliente]);
    }

    public function store(ProductoFormRequest $request)
    {
        $producto=new Producto;
        $producto->id_producto=$request->get('id_producto');
        $producto->vlr_unitario=$request->get('vlr_unitario');
        $producto->id_arte=$request->get('id_arte');
        $producto->save();

        return Redirect::to('comercial/productos')
        ->with('success','Producto agregado correctamente');
    }

    public function show($id)
    {
        return view("comercial.productos.show",["producto"=>Producto::findOrFail($id)]);
    }

    public function edit($id)
    {
        $producto=Producto::findOrFail($id);
        $arte=DB::table('arte_productos')->get();
        $cliente=DB::table('clientes')->get();

        return view("comercial.productos.edit", ["producto"=>$producto, "arte"=>$arte, "cliente"=>$cliente]);
    }

    public function update(ProductoFormRequest $request, $id)
    {
        $producto=Producto::findOrFail($id);
        $producto->vlr_unitario=$request->get('vlr_unitario');
        $producto->update();

        return Redirect::to('comercial/productos')
        ->with('success','Producto actualizado correctamente');
    }

    public function destroy($id)
    {
        $producto=Producto::findOrFail($id);
        $producto->delete();

        return Redirect::to('comercial/productos')
        ->with('success', 'Producto eliminado correctamente');
    }
}
