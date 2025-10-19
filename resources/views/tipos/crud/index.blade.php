@extends('layouts.simple')

@section('content')
  <div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2>Tipos de Producto</h2>
      <div class="d-flex gap-2">
        <a href="/home" class="btn btn-outline-secondary">Volver a Home</a>
        <a href="{{ route('tipos.create') }}" class="btn btn-primary">Nuevo Tipo</a>
      </div>
    </div>

    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($tipos->count())
      <div class="list-group">
        @foreach($tipos as $t)
          <div class="list-group-item d-flex justify-content-between align-items-center">
            <div>
              <strong>{{ $t->nombre }}</strong>
              <div class="text-muted small">{{ $t->unidad }} • {{ $t->descripcion ? Str::limit($t->descripcion,60) : '—' }}</div>
            </div>
            <div class="btn-group">
              <a href="{{ route('tipos.show', $t) }}" class="btn btn-sm btn-outline-secondary">Ver</a>
              <a href="{{ route('tipos.edit', $t) }}" class="btn btn-sm btn-secondary">Editar</a>
              <form action="{{ route('tipos.destroy', $t) }}" method="POST" onsubmit="return confirm('Eliminar tipo?');">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger">Eliminar</button>
              </form>
            </div>
          </div>
        @endforeach
      </div>

      <div class="mt-3">{{ $tipos->links() }}</div>
    @else
      <div class="card p-4">No hay tipos aún.</div>
    @endif
  </div>
@endsection
