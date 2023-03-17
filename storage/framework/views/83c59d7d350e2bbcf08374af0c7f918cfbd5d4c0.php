
<label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" id="Nombre" value="<?php echo e($empleado->Nombre); ?>">
    <br>
    <label for="ApellidoPaterno">Apellido Paterno</label>
    <input type="text" name="ApellidoPaterno" id="ApellidoPaterno" value="<?php echo e($empleado->ApellidoPaterno); ?>">
    <br>
    <label for="ApellidoMaterno">Apellido Materno</label>
    <input type="text" name="ApellidoMaterno" value="<?php echo e($empleado->ApellidoMaterno); ?>">
    <br>
    <label for="Correo">Correo</label>
    <input type="text" name="Correo" value="<?php echo e($empleado->Correo); ?>">
    <br>
    <label for="file">Archivo</label>
    <input type="file" name="Foto" value="<?php echo e($empleado->Foto); ?>">
    <br>
    <input type="submit" value="Enviar"><?php /**PATH C:\Users\Sergio Montiel\Desktop\laravel largo\example-app\resources\views/empleado/form.blade.php ENDPATH**/ ?>