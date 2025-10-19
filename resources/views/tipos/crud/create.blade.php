@extends('layouts.simple')

@section('content')
  <div class="container py-4">
    <h2>Crear Tipo de Producto</h2>

    @if($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach($errors->all() as $e)
            <li>{{ $e }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <div class="card p-4">
      <form action="{{ route('tipos.store') }}" method="POST">
        @csrf
        @include('tipos.crud._form')
        <div class="d-flex gap-2">
          <button class="btn btn-primary">Guardar</button>
          <a href="{{ route('tipos.index') }}" class="btn btn-outline-secondary">Cancelar</a>
        </div>
      </form>
    </div>
  </div>
@endsection
