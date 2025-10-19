@extends('layouts.simple')

@section('content')
  <div class="container py-4">
    <h2>{{ $producto->nombre }}</h2>
    <div class="mb-3 text-muted">Tipo: {{ $producto->tipo->nombre ?? '—' }}</div>
    <div class="card p-4 mb-3">
      <p>{{ $producto->descripcion }}</p>
      <p class="mb-0"><strong>Precio:</strong> ${{ number_format($producto->precio,2) }}</p>
    </div>

  <a href="/home" class="btn btn-outline-secondary">Volver a Home</a>
  <a href="{{ route('productos.edit', $producto) }}" class="btn btn-secondary">Editar</a>
  <a href="{{ route('productos.index') }}" class="btn btn-outline-secondary">Volver</a>
  </div>
@endsection
