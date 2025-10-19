

<?php $__env->startSection('content'); ?>
  <div class="container py-4">
    <h2><?php echo e($producto->nombre); ?></h2>
    <div class="mb-3 text-muted">Tipo: <?php echo e($producto->tipo->nombre ?? '—'); ?></div>
    <div class="card p-4 mb-3">
      <p><?php echo e($producto->descripcion); ?></p>
      <p class="mb-0"><strong>Precio:</strong> $<?php echo e(number_format($producto->precio,2)); ?></p>
    </div>

    <a href="<?php echo e(route('productos.edit', $producto)); ?>" class="btn btn-secondary">Editar</a>
    <a href="<?php echo e(route('productos.index')); ?>" class="btn btn-outline-secondary">Volver</a>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Xampp\htdocs\Carniceria\carniceria\resources\views/productos/crud/show.blade.php ENDPATH**/ ?>