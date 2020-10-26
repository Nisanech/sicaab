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
            $material=DB::table('material as mat')
                        ->join('categoria_material as cm', 'mat.id_categoriamaterial', '=', 'cm.id_categoriamaterial')
                        ->select('mat.id_material', 'mat.nombre_material', 'mat.unidad_medida', 'cm.categoria', 'mat.stock')
                        ->where('mat.nombre_material','LIKE','%'.$query.'%')
                        ->orWhere('cm.categoria','LIKE','%'.$query.'%')
                        ->orderBy('categoria', 'asc')
                        ->paginate(20);
            
            return view('almacen.materiales.index', ["material"=>$material, "buscarpor"=>$query]);
        }
    }

    public function create()
    {
        $categoria=DB::table('categoria_material')->get();

        return view("almacen.materiales.create", ["categoria"=>$categoria]);
    }

    public function store(MaterialFormRequest $request)
    {
        $material=new Material;
        $material->id_material=$request->get('id_material');
        $material->nombre_material=$request->get('nombre_material');
        $material->unidad_medida=$request->get('unidad_medida');
        $material->stock=$request->get('stock');
        $material->id_categoriamaterial=$request->get('id_categoriamaterial');
        $material->save();

        return Redirect::to('almacen/materiales')
        ->with('success', 'Material creado correctamente');
    }

    public function show($id)
    {
        $material=Material::findOrFail($id);
        $categoria=DB::table('categoria_material')->get();

        return view("almacen.materiales.show", ["material"=>$material, "categoria"=>$categoria]);
    }

    public function edit($id)
    {
        $material=Material::findOrFail($id);
        $categoria=DB::table('categoria_material')->get();

        return view("almacen.materiales.edit", ["material"=>$material, "categoria"=>$categoria]);
    }

    public function update(MaterialFormRequest $request, $id)
    {
        $material=Material::findOrFail($id);
        $material->nombre_material=$request->get('nombre_material');
        $material->unidad_medida=$request->get('unidad_medida');
        $material->stock=$request->get('stock');
        $material->id_categoriamaterial=$request->get('id_categoriamaterial');
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
