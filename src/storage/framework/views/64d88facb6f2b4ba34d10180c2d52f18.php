

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('site.produto.page-title', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('site.produto.slidebar-produto', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('plugins'); ?>
<script src="<?php echo e(asset('davilla/js/sticky_sidebar.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layout.site', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /var/www/html/resources/views/site/produto/produto.blade.php ENDPATH**/ ?>