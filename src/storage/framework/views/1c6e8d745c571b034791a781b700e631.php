    <?php
    $pageTitle = asset('davilla/images/34.jpg');
    ?>
    <section class="page-title" style="background-image:url('<?php echo e($pageTitle); ?>')">
        <div class="auto-container">
            <h1><?php echo e($produto->nome_produto); ?></h1>
            <ul class="page-breadcrumb">
                <li><a href="<?php echo e(route('home')); ?>">home</a></li>
                <li><a href="<?php echo e(route('cardapio')); ?>">Categoria</a></li>
                <li><?php echo e($produto->nome_produto); ?></li>
            </ul>
        </div>
    </section>
    <!--End Page Title--><?php /**PATH /var/www/html/resources/views/site/produto/page-title.blade.php ENDPATH**/ ?>