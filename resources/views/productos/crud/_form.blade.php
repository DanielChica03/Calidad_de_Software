<div class="mb-3">
  <label for="nombre" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $producto->nombre ?? '') }}" required>
</div>

<div class="mb-3">
  <label for="descripcion" class="form-label">Descripción</label>
  <textarea class="form-control" id="descripcion" name="descripcion">{{ old('descripcion', $producto->descripcion ?? '') }}</textarea>
</div>

<div class="mb-3">
  <label for="precio" class="form-label">Precio</label>
  <input type="number" step="0.01" class="form-control" id="precio" name="precio" value="{{ old('precio', $producto->precio ?? '0.00') }}" required>
</div>

<div class="mb-3">
  <label for="tipo_id" class="form-label">Tipo</label>
  <select class="form-select" id="tipo_id" name="tipo_id" required>
    <option value="">-- Seleccionar --</option>
    @foreach($tipos as $tipo)
      <option value="{{ $tipo->id }}" {{ (old('tipo_id', $producto->tipo_id ?? '') == $tipo->id) ? 'selected' : '' }}>{{ $tipo->nombre }}</option>
    @endforeach
  </select>
</div>
