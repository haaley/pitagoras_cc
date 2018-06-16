<div class="modal fade" id="add-category-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <form role="form" class="form-horizontal" action="{{ route('category.store') }}" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">A nova classificação</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Nome da categoria
                        </label>
                        <div class="col-md-8">
                            <input id="name" type="text" class="form-control" name="name" autofocus>
                        </div>
                    </div>
                    {{ csrf_field() }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button id="confirm-btn" type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->