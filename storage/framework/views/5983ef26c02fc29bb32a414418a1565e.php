

<?php $__env->startSection('content'); ?>
  <div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2>Tipos de Producto</h2>
      <div class="d-flex gap-2">
        <a href="/home" class="btn btn-outline-secondary">Volver a Home</a>
        <a href="<?php echo e(route('tipos.create')); ?>" class="btn btn-primary">Nuevo Tipo</a>
      </div>
    </div>

    <?php if(session('success')): ?>
      <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <?php if($tipos->count()): ?>
      <div class="list-group">
        <?php $__currentLoopData = $tipos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="list-group-item d-flex justify-content-between align-items-center">
            <div>
              <strong><?php echo e($t->nombre); ?></strong>
              <div class="text-muted small"><?php echo e($t->unidad); ?> • <?php echo e($t->descripcion ? Str::limit($t->descripcion,60) : '—'); ?></div>
            </div>
            <div class="btn-group">
              <a href="<?php echo e(route('tipos.show', $t)); ?>" class="btn btn-sm btn-outline-secondary">Ver</a>
              <a href="<?php echo e(route('tipos.edit', $t)); ?>" class="btn btn-sm btn-secondary">Editar</a>
              <form action="<?php echo e(route('tipos.destroy', $t)); ?>" method="POST" onsubmit="return confirm('Eliminar tipo?');">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button class="btn btn-sm btn-danger">Eliminar</button>
              </form>
            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>

      <div class="mt-3"><?php echo e($tipos->links()); ?></div>
    <?php else: ?>
      <div class="card p-4">No hay tipos aún.</div>
    <?php endif; ?>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Xampp\htdocs\Carniceria\carniceria\resources\views/tipos/crud/index.blade.php ENDPATH**/ ?>