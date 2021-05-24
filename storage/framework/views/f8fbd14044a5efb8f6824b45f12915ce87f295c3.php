
<h1><?php echo e($modo); ?> Empleado </h1>

<?php if(count($errors)>0): ?>

    <div class="alert alert-danger" role="alert">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>    
    </div>
    

<?php endif; ?>

<div class="form-group">

    <label for="Nombre"> Nombre </label>
    <input type="text" class="form-control" name="Nombre" value="<?php echo e(isset($empleado->Nombre)?$empleado->Nombre:old('Nombre')); ?>" id="Nombre">
    

</div>

<div class="form-group">
    
    <label for="Apellido Paterno"> Apellido Paterno </label>
    <input type="text" class="form-control" name="ApellidoPaterno" value="<?php echo e(isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno')); ?>" id="ApellidoPaterno">
    

</div>

<div class="form-group">

    <label for="ApellidoMaterno"> Apellido Materno</label>
    <input type="text" class="form-control" name="ApellidoMaterno" value="<?php echo e(isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno')); ?>" id="ApellidoMaterno">
    

</div>

<div class="form-group">
    
    <label for="Correo"> Correo </label>
    <input type="text" class="form-control" name="Correo" value="<?php echo e(isset($empleado->Correo)?$empleado->Correo:old('Correo')); ?>" id="Correo">
    

</div>

<div class="form-group">
    
    <label for="Correo"> Direccion </label>
    <input type="text" class="form-control" name="Correo" value="<?php echo e(isset($empleado->Direccion)?$empleado->Direccion:old('Direccion')); ?>" id="Direccion">
    

</div>

<div class="form-group">

    <label for="Foto"> </label>

    <?php if(isset($empleado->Foto)): ?>

        <img class="img-thumbnail ing-fluid" src="<?php echo e(asset('storage'.'/'.$empleado->Foto)); ?>" width="100" alt="">

    <?php endif; ?>

    <input type="file" class="form-control" name="Foto" value="" id="Foto"> 
    

</div>

<input class="btn btn-success" type="submit" value="<?php echo e($modo); ?> Datos">

<a class="btn btn-primary" href="<?php echo e(url('empleado')); ?>"> Regresar</a>

 <?php /**PATH C:\xampp\htdocs\sistema\resources\views/empleado/form.blade.php ENDPATH**/ ?>