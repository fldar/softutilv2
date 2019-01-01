<div class="modal fade" id="deletar-contato" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <form id="deleteForm" action="" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-header">
                <h1>!!! Atenção !!!</h1>
            </div>
            <div class="modal-body">
              <h3>Deseja deletar?</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary btn-sm" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-outline-danger btn-sm">Excluir</a>
            </div>
          </form>
        </div>
    </div>
</div>
