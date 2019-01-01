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

    @include('contatos._includes.contatos-table')

    @include('contatos._includes.contatos-modal')

    @include('contatos._includes.contatos-excluir-modal')

@push('scripts')
<script type="text/javascript" src="js/contato.js"></script>
@endpush

@endsection
