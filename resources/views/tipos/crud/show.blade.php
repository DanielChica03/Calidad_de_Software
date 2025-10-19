@extends('layouts.simple')

@section('content')
  <div class="container py-4">
    <h2>{{ $tipo->nombre }}</h2>
    <div class="mb-2 text-muted">Unidad: {{ $tipo->unidad }} • {{ $tipo->activo ? 'Activo' : 'Inactivo' }}</div>
    <div class="card p-4 mb-3">
      <p>{{ $tipo->descripcion }}</p>
      @if($tipo->porcentaje_descuento)
        <p class="mb-0"><strong>Descuento:</strong> {{ $tipo->porcentaje_descuento }}%</p>
      @endif
    </div>

  <a href="/home" class="btn btn-outline-secondary">Volver a Home</a>
  <a href="{{ route('tipos.edit', $tipo) }}" class="btn btn-secondary">Editar</a>
  <a href="{{ route('tipos.index') }}" class="btn btn-outline-secondary">Volver</a>
  </div>
@endsection
