<div class="row justify-content-md-center table-link">


  <div class="modal fade" id="util_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Novo Link</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="uteis" action="{{route('uteis.salvar')}}" method="post" >
            {{ csrf_field() }}
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Descrição</label>
              <input type="text" class="form-control" id="descricao" name="descricao" maxlength="50">
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Conteudo</label>
              <input type="text" class="form-control" id="conteudo" name="conteudo" maxlength="700">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" form="uteis"class="btn btn-primary">Salvar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
