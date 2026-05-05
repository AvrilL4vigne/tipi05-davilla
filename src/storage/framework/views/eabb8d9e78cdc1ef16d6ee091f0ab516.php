<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php echo $__env->make('partials.head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</head>
<body>
 
    <div class="page-wrapper">
 
        <?php echo $__env->make('partials.preloader', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
 
        <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
 
        <main>
 
            <?php echo $__env->yieldContent('content'); ?>
           
        </main>
 
        <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
 
    </div><!-- End Page Wrapper -->
 
    <?php echo $__env->make('partials.script', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
 
 
    <?php echo $__env->yieldPushContent('plugins'); ?> 
 
    <script src="<?php echo e(asset('davilla/js/script.js')); ?>"></script>
 
    <?php echo $__env->yieldPushContent('scripts'); ?>
   
</body>
</html><?php /**PATH /var/www/html/resources/views/layout/site.blade.php ENDPATH**/ ?>