{{-- Inicio modal eliminar registro --}}
<div class="modal fade modal-slide-in-right" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{ $pro->id_producto }}">
    {!! Form::open(array('action'=>array('ProductoController@destroy', $pro->id_producto), 'method'=>'delete')) !!}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Quieres eliminar el registro?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                <button type="submit" class="btn btn-primary">ELIMINAR</button>
            </div>
        </div>
    </div>

    {!! Form::close() !!}
</div>
{{-- Fin modal eliminar registro --}}