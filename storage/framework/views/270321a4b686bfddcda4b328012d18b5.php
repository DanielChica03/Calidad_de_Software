<div class="mb-3">
  <label for="nombre" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo e(old('nombre', $tipo->nombre ?? '')); ?>" required>
</div>

<div class="mb-3">
  <label for="descripcion" class="form-label">Descripción</label>
  <textarea class="form-control" id="descripcion" name="descripcion"><?php echo e(old('descripcion', $tipo->descripcion ?? '')); ?></textarea>
</div>

<div class="mb-3">
  <label for="unidad" class="form-label">Unidad</label>
  <select name="unidad" id="unidad" class="form-select">
    <?php $u = old('unidad', $tipo->unidad ?? 'kg'); ?>
    <option value="kg" <?php echo e($u=='kg' ? 'selected' : ''); ?>>kg</option>
    <option value="unidad" <?php echo e($u=='unidad' ? 'selected' : ''); ?>>unidad</option>
  </select>
</div>

<div class="mb-3">
  <label for="porcentaje_descuento" class="form-label">% Descuento (opcional)</label>
  <input type="number" step="0.01" class="form-control" id="porcentaje_descuento" name="porcentaje_descuento" value="<?php echo e(old('porcentaje_descuento', $tipo->porcentaje_descuento ?? '')); ?>">
</div>

<div class="form-check mb-3">
  <input type="hidden" name="activo" value="0">
  <input type="checkbox" class="form-check-input" id="activo" name="activo" value="1" <?php echo e(old('activo', $tipo->activo ?? true) ? 'checked' : ''); ?>>
  <label class="form-check-label" for="activo">Activo</label>
</div>
<?php /**PATH C:\Xampp\htdocs\Carniceria\carniceria\resources\views/tipos/crud/_form.blade.php ENDPATH**/ ?>