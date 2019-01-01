<div class="container home table-link">
  <div class="card tabelas">
      <div class="card-body">

          <div class="row justify-content-md-center">
            <h3>CONTATOS</h3>
          </div><!-- DIV HEADER -->

          <div class="row input-group md-form form-sm form-1 pl-0">
                <input onkeyup="contato()" id ="contato-search-input" class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" aria-label="Search">
          </div><!-- DIV SEARCH 2-->

          <div class="row table-wrapper-2">
            <table class="table table-striped table-bordered table-responsive-md" id="contato-search-table">
              <thead class="mdb-color elegant-color">
                  <tr>
                      <th>Descrição</th>
                      <th>Conteudo</th>
                      <th>Ação</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($registros_contatos as $contatos)
                  <tr>
                      <td scope="row">{{$contatos->descricao}}</td>
                      <td>{{$contatos->conteudo}}</td>
                      <td>
                      @if(Auth::guest())
                      @else
                          <button type="button" class="btn btn-danger btn-sm" data-href="{{route('contatos.deletar', $contatos->id)}}" data-toggle="modal" data-target="#deletar-contato">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                          </button>
                        @endif
                      </td>
                  </tr>
                @endforeach
              </tbody>
              </table>
          </div><!-- DIV TABLE WRAPER -->



          <div class="row justify-content-md-center">
            @if(Auth::guest())
            @else
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#contato_modal" data-whatever="@mdo">Novo</button>
            @endif
          </div>

      </div><!-- DIV CARD -->
  </div><!-- DIV CARD TABELAS -->
</div>
