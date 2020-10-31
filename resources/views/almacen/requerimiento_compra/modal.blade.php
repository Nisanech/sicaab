{{-- Inicio modal eliminar registro --}}
<div class="modal fade modal-slide-in-right" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$req->id_requerimiento}}">

    {{-- Inicio formulario --}}
    {!! Form::open(array('action'=>array('RequerimientoCompraController@destroy', $req->id_requerimiento), 'method'=>'delete')) !!}
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anular Requerimiento de Compra</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿Quieres anular el requerimiento?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Anular</button>
                </div>
            </div>
        </div>
    {!! Form::close() !!}
    {{-- Fin formulario --}}
</div>
{{-- Fin modal eliminar registro --}}