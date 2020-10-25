{{-- Inicio modal elimminar registro --}}
<div class="modal fade modal-slide-in-right" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$mat->id_material}}">
    {!! Form::Open(array('action'=>array('MaterialController@destroy',$mat->id_material),'method'=>'delete')) !!}
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
                <button type="submit" class="btn btn-danger">ELIMINAR</button>
            </div>
        </div>
    </div>
    {!! Form::Close() !!}
</div>
{{-- Fin modal eliminar registro --}}