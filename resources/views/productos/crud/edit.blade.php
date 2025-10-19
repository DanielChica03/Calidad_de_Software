@extends('layouts.simple')

@section('content')
  <div class="container py-4">
    <h2>Editar Producto</h2>

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
      <form action="{{ route('productos.update', $producto) }}" method="POST">
        @csrf
        @method('PUT')
        @include('productos.crud._form')
        <div class="d-flex gap-2">
          <button class="btn btn-primary">Actualizar</button>
          <a href="{{ route('productos.index') }}" class="btn btn-outline-secondary">Cancelar</a>
        </div>
      </form>
    </div>
  </div>
  <script>
    document.querySelector('form').addEventListener('submit', function (e) {
      const precio = parseFloat(document.getElementById('precio').value || '0');
      if (isNaN(precio) || precio <= 0) {
        e.preventDefault();
        alert('El precio debe ser mayor a 0.');
      }
    });
  </script>
@endsection
