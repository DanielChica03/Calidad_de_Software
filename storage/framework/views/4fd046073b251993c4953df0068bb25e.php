

<?php $__env->startSection('content'); ?>
  <div class="container py-4">
    <h2>Crear Tipo de Producto</h2>

    <?php if($errors->any()): ?>
      <div class="alert alert-danger">
        <ul class="mb-0">
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($e); ?></li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div>
    <?php endif; ?>

    <div class="card p-4">
      <form action="<?php echo e(route('tipos.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo $__env->make('tipos.crud._form', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <div class="d-flex gap-2">
          <button class="btn btn-primary">Guardar</button>
          <a href="<?php echo e(route('tipos.index')); ?>" class="btn btn-outline-secondary">Cancelar</a>
        </div>
      </form>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Xampp\htdocs\Carniceria\carniceria\resources\views/tipos/crud/create.blade.php ENDPATH**/ ?>