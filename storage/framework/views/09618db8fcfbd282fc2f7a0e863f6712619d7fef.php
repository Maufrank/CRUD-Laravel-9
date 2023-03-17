hola formulario

<form action="<?php echo e(url('/empleado')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo $__env->make('empleado.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</form><?php /**PATH C:\Users\Sergio Montiel\Desktop\laravel largo\example-app\resources\views/empleado/create.blade.php ENDPATH**/ ?>