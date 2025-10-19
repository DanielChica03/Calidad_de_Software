@extends('layouts.simple')

@section('content')
  <div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2>Productos</h2>
      <div class="d-flex gap-2">
        <a href="/home" class="btn btn-outline-secondary">Volver a Home</a>
        <a href="{{ route('productos.create') }}" class="btn btn-primary">Nuevo Producto</a>
      </div>
    </div>

    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="GET" class="mb-3 row g-2 align-items-center">
      <div class="col-auto">
        <select name="tipo_id" class="form-select">
          <option value="">-- Todos los tipos --</option>
          @foreach($tipos as $t)
            <option value="{{ $t->id }}" {{ request('tipo_id') == $t->id ? 'selected' : '' }}>{{ $t->nombre }}</option>
          @endforeach
        </select>
      </div>
      <div class="col-auto">
        <button class="btn btn-outline-primary">Filtrar</button>
        <a href="{{ route('productos.index') }}" class="btn btn-outline-secondary">Limpiar</a>
      </div>
    </form>

    @if($productos->count())
      <div class="list-group">
        @foreach($productos as $p)
          <div class="list-group-item d-flex justify-content-between align-items-center">
            <div>
              <strong>{{ $p->nombre }}</strong>
              <div class="text-muted small">{{ $p->tipo->nombre ?? '—' }} • ${{ number_format($p->precio,2) }}</div>
            </div>
            <div class="btn-group">
              <a href="{{ route('productos.show', $p) }}" class="btn btn-sm btn-outline-secondary">Ver</a>
              <a href="{{ route('productos.edit', $p) }}" class="btn btn-sm btn-secondary">Editar</a>
              <form action="{{ route('productos.destroy', $p) }}" method="POST" onsubmit="return confirm('Eliminar producto?');">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger">Eliminar</button>
              </form>
            </div>
          </div>
        @endforeach
      </div>

      <nav class="mt-3" aria-label="Page navigation">
        @php
          $query = request()->except('page');
        @endphp
        <ul class="pagination">
          @for ($i = 1; $i <= $productos->lastPage(); $i++)
            @php
              $url = $productos->url($i);
              if (!empty($query)) {
                $sep = parse_url($url, PHP_URL_QUERY) ? '&' : '?';
                $url .= $sep . http_build_query($query);
              }
            @endphp
            <li class="page-item {{ $productos->currentPage() == $i ? 'active' : '' }}">
              <a class="page-link" href="{{ $url }}">{{ $i }}</a>
            </li>
          @endfor
        </ul>
      </nav>
    @else
      <div class="card p-4">No hay productos aún.</div>
    @endif
  </div>
@endsection
