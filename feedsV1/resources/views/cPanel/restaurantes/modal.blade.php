<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$restaurante->id}}">
    {!! Form::Open(array('action'=>array('RestauranteController@destroy',$restaurante->id),'method'=>'delete'))!!}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h4 class="modal-title c_white">Eliminar Restaurante</h4>
            </div>
            <div class="modal-body bg-danger">
                <p class="c_white">¿ Estás seguro que deseas borrar este restaurante ?</p>
            </div>
            <div class="modal-footer bg-danger">
                <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancelar</button>
                <button type="submit" class="btn btn-primary">Si, Borrar</button>
            </div>
        </div>
    </div>
    {!! Form::Close() !!}
</div>