

<?php $__env->startSection('content'); ?>
  <div class="container py-4">
    <h2><?php echo e($tipo->nombre); ?></h2>
    <div class="mb-2 text-muted">Unidad: <?php echo e($tipo->unidad); ?> • <?php echo e($tipo->activo ? 'Activo' : 'Inactivo'); ?></div>
    <div class="card p-4 mb-3">
      <p><?php echo e($tipo->descripcion); ?></p>
      <?php if($tipo->porcentaje_descuento): ?>
        <p class="mb-0"><strong>Descuento:</strong> <?php echo e($tipo->porcentaje_descuento); ?>%</p>
      <?php endif; ?>
    </div>

  <a href="/home" class="btn btn-outline-secondary">Volver a Home</a>
  <a href="<?php echo e(route('tipos.edit', $tipo)); ?>" class="btn btn-secondary">Editar</a>
  <a href="<?php echo e(route('tipos.index')); ?>" class="btn btn-outline-secondary">Volver</a>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Xampp\htdocs\Carniceria\carniceria\resources\views/tipos/crud/show.blade.php ENDPATH**/ ?>