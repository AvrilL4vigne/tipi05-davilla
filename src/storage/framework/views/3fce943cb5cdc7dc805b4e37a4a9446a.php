

<?php $__env->startSection('content'); ?>


   <?php echo $__env->make('site.home.slider', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('site.home.services', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('site.home.action', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('site.home.features', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('site.home.pricing', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <?php echo $__env->make('site.home.recipes', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

 


 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.site', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/resources/views/site/home/home.blade.php ENDPATH**/ ?>