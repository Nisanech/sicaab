<?php

namespace sicaab\Http\Controllers;

use Illuminate\Http\Request;
use sicaab\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use sicaab\Http\Requests\MaterialFormRequest;
use sicaab\Material;
use Illuminate\Support\Facades\DB;

class MaterialController extends Controller
{
    //Constructor
    public function __construct()
    {
        $this->middleware('permission:materiales.index')->only('index');
        $this->middleware('permission:materiales.create')->only(['create', 'store']);
        $this->middleware('permission:materiales.show')->only('show');
        $this->middleware('permission:materiales.edit')->only(['edit', 'update']);
        $this->middleware('permission:materiales.destroy')->only(['destroy']);
    }

    public function index(Request $request)
    {
        if($request)
        {
            $query=trim($request->get('buscarpor'));
            $material=DB::table('materiales as mat')
                        ->select('mat.id_material', 'mat.nombre_material', 'mat.unidad_medida', 'mat.categoria', 'mat.stock')
                        ->where('mat.nombre_material','LIKE','%'.$query.'%')
                        ->orWhere('mat.categoria','LIKE','%'.$query.'%')
                        ->orderBy('categoria', 'asc')
                        ->paginate(20);
            
            return view('almacen.materiales.index', ["material"=>$material, "buscarpor"=>$query]);
        }
    }

    public function create()
    {
        return view("almacen.materiales.create");
    }

    public function store(MaterialFormRequest $request)
    {
        $material=new Material;
        $material->id_material=$request->get('id_material');
        $material->nombre_material=$request->get('nombre_material');
        $material->unidad_medida=$request->get('unidad_medida');
        $material->stock=$request->get('stock');
        $material->categoria=$request->get('categoria');
        $material->save();

        return Redirect::to('almacen/materiales')
        ->with('success', 'Material creado correctamente');
    }

    public function show($id)
    {
        return view("almacen.materiales.show", ["material"=>Material::findOrFail($id)]);
    }

    public function edit($id)
    {
        $material=Material::findOrFail($id);

        return view("almacen.materiales.edit", ["material"=>$material]);
    }

    public function update(MaterialFormRequest $request, $id)
    {
        $material=Material::findOrFail($id);
        $material->nombre_material=$request->get('nombre_material');
        $material->unidad_medida=$request->get('unidad_medida');
        $material->stock=$request->get('stock');
        $material->categoria=$request->get('categoria');
        $material->update();

        return Redirect::to('almacen/materiales')
        ->with('success', 'Material actualizado correctamente');

    }

    public function destroy($id)
    {
        $material=Material::findOrFail($id);
        $material->delete();

        return Redirect::to('almacen/materiales')
        ->with('success', 'Material eliminado correctamente');
    }
}
