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

    @include('uteis._includes.uteis-table')

    @include('uteis._includes.uteis-modal')

    @include('uteis._includes.uteis-excluir-modal')

@push('scripts')
<script type="text/javascript" src="js/util.js"></script>
@endpush

@endsection
