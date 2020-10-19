{{-- Inicio formulario --}}
{!! Form::open(array('url'=>'comercial/proveedores', 'method'=>'GET', 'autocomplete'=>'off', 'role'=>'search')) !!}

{{-- Inicio opción buscar --}}
<div class="container-fluid">
    <form action="" class="form-neon form-inline">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-3">
                    <div class="form-group">
                        <label for="buscarpor" class="bmd-label-floating">¿Qué proveedor estás buscando?</label>
                        <input type="search" class="form-control mr-sm-2" name="buscarpor" id="buscar" aria-label="Search">
                    </div>
                </div>
                <div class="col-12">
                    <p class="text-center">
                        <button type="submit" class="btn btn-raised btn-info"><i class="fas fa-search"></i> &nbsp; BUSCAR</button>
                    </p>
                </div>
            </div>
        </div>
    </form>
</div>
{{-- Fin opción buscar --}}

{!! Form::close() !!}
{{-- Fin formulario --}}