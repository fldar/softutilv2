<div class="container home table-link">
  <div class="card tabelas">
      <div class="card-body">

          <div class="row justify-content-md-center">
            <h3>LINKS</h3>
          </div><!-- DIV HEADER -->

          <div class="row input-group md-form form-sm form-1 pl-0">
                <input onkeyup="link()" id ="link-search-input" class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" aria-label="Search">
          </div><!-- DIV SEARCH 2-->

          <div class="row table-wrapper-2">
            <table class="table table-striped table-bordered table-responsive-md" id="link-search-table">
              <thead class="mdb-color elegant-color">
                  <tr>
                      <th>Site</th>
                      <th>Ir</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($registro_link as $link)
                  <tr>
                      <td scope="row">{{$link->site}}</td>
                      <td>
                          <a href="{{$link->link}}" class="btn btn-primary btn-sm" target="_blank">
                              <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                          </a>
                      @if(Auth::guest())
                      @else
                          <button type="button" class="btn btn-danger btn-sm" data-href="{{route('links.deletar', $link->id)}}" data-toggle="modal" data-target="#deletar-link">
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
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#link_modal" data-whatever="@mdo">Novo</button>
            @endif
          </div><!-- DIV HEADER -->


      </div><!-- DIV CARD -->
  </div><!-- DIV CARD TABELAS -->
</div>
