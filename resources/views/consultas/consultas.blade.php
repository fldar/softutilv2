@extends('layout.site')

@section('titulo','Home')

@section('conteudo')

    @if ($errors->any())
      <div class="row alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif

    @include('consultas._includes.consultas-table')

    @include('consultas._includes.consultas-modal')

    @include('consultas._includes.consultas-excluir-modal')

@push('scripts')
  <script type="text/javascript" src="js/consulta.js"></script>
@endpush

@endsection
