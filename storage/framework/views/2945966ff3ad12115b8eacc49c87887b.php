<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tokoonlinetes</title>
</head>

<body>
    <a href="<?php echo e(route('backend.beranda')); ?>">Beranda</a> |
    <a href="#">User</a> |
    <a href="" onclick="event.preventDefault(); document.getElementById('keluar-app').submit();">Keluar</a>
    <p></p>

    <!-- @yieldAwal -->
    <?php echo $__env->yieldContent('content'); ?>
    <!-- @yieldAkhir-->

    <!-- keluarApp -->
    <form id="keluar-app" action="<?php echo e(route('backend.logout')); ?>" method="POST" class="d-none">
        <?php echo csrf_field(); ?>
    </form>
    <!-- keluarAppEnd -->
</body>

</html><?php /**PATH C:\Laravel10\TokoOnline\resources\views/backend/v_layouts/app.blade.php ENDPATH**/ ?>