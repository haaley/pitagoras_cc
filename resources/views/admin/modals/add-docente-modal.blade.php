<div class="modal fade" id="add-docente-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <form role="form" class="form-horizontal" action="{{ route('docente.store') }}" method="post" enctype="multipart/form-data">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">A nova classificação</h4>
                </div>
                <div class="modal-body">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="col-md-4 control-label">Nome do docente
                        </label>
                        <div class="col-md-8">
                            <input id="name" type="text" class="form-control" name="name" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-md-4 control-label">Descrição do docente
                        </label>
                        <div class="col-md-8">
                            <textarea id="description" rows="5" class="form-control" name="description"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="avatar" class="col-md-4 control-label">Avatar do docente
                        </label>
                        <div class="col-md-8">
                            <input id="avatar" type="file" class="form-control" name="avatar">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-4 control-label">Email do docente
                        </label>
                        <div class="col-md-8">
                            <input id="email" type="text" class="form-control" name="email" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="skype" class="col-md-4 control-label">Skype do docente
                        </label>
                        <div class="col-md-8">
                            <input id="skype" type="text" class="form-control" name="skype" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-md-4 control-label">Telefone do docente
                        </label>
                        <div class="col-md-8">
                            <input id="phone" type="text" class="form-control" name="phone" autofocus>
                        </div>
                    </div>
                        <div class="form-group">
                        <label for="location" class="col-md-4 control-label">Localização do docente
                        </label>
                        <div class="col-md-8">
                            <input id="location" type="text" class="form-control" name="location" autofocus>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="web" class="col-md-4 control-label">Página Web do docente
                        </label>
                        <div class="col-md-8">
                            <input id="web" type="text" class="form-control" name="web" autofocus>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button id="confirm-btn" type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div><!-- /.modal-content -->
        </form>
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->