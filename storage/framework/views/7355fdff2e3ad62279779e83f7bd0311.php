

<?php $__env->startSection('title', 'Iniciar sesión - Carnicería'); ?>

<?php $__env->startSection('content'); ?>
  <div class="container py-5 d-flex justify-content-center">
    <div class="col-12 col-md-6 col-lg-5">
      <div class="card p-4">
        <div class="text-center mb-3">
          <h2 class="mb-0"><span class="logo-mark"></span> Carnicería</h2>
          <p class="text-muted">Accede al panel de control</p>
        </div>

        <form method="POST" action="/login" class="needs-validation" novalidate>
          <?php echo csrf_field(); ?>
          <div class="mb-3">
            <label for="email" class="form-label">Correo</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="tu@ejemplo.com" required>
            <div class="invalid-feedback">Introduce un correo válido.</div>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
            <div class="invalid-feedback">Introduce tu contraseña.</div>
          </div>
          <div class="d-grid">
            <button type="submit" class="btn btn-primary btn-lg">Iniciar sesión</button>
          </div>
        </form>
  </div>

  <script>
    // Bootstrap validation helper
    (function () {
      'use strict'
      var forms = document.querySelectorAll('.needs-validation')
      Array.prototype.slice.call(forms).forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
          form.classList.add('was-validated')
        }, false)
      })
    })()
  </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Xampp\htdocs\Carniceria\carniceria\resources\views/auth/login.blade.php ENDPATH**/ ?>