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

    @include('links._includes.links-table')

    @include('links._includes.links-modal')

    @include('links._includes.links-excluir-modal')

@push('scripts')
<script type="text/javascript" src="js/link.js"></script>
@endpush

@endsection
