<header class="main-header">
    <div class="menu_wave"></div>

    <div class="main-box">
        <div class="menu-box">
            <div class="logo">
                <a href="<?php echo e(route('home')); ?>">
                    <img src="<?php echo e(asset('davilla/images/logo-davilla.svg')); ?>" width="100px" height="100px"
                        alt="Logo Davilla">
                </a>
            </div>

            <div class="nav-outer clearfix">
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">

                        <ul class="navigation menu-left clearfix">
                            <li class="<?php echo e(Route::is('home') ? 'current' : ''); ?>">
                                <a href="<?php echo e(route('home')); ?>">Home</a>
                            </li>

                            <li class="<?php echo e(Route::is('sobre') ? 'current' : ''); ?>">
                                <a href="<?php echo e(route('sobre')); ?>">Sobre Nós</a>
                            </li>

                            <li class="<?php echo e(Route::is('cardapio') ? 'current' : ''); ?>">
                                <a href="<?php echo e(route('cardapio')); ?>">Cardapio</a>
                            </li>

                            <li class="<?php echo e(Route::is('recipes') ? 'current' : ''); ?>">
                                <a href="<?php echo e(route('recipes')); ?>">Receitas</a>
                            </li>
                        </ul>

                        <ul class="navigation menu-right clearfix">
                            <li class="dropdown"><a href="#">Onde Entregamos</a>
                                <ul>
                                    <li><a href="#">Zona Leste</a></li>
                                    <li><a href="#">Zona Norte</a></li>
                                    
                                    <li><a href="<?php echo e(route('home')); ?>#action">Regras de Entrega</a></li>
                                </ul>
                            </li>

                            <li class="<?php echo e(Route::is('pricing') ? 'current' : ''); ?>">
                                <a href="<?php echo e(route('pricing')); ?>">Preços</a>
                            </li>


                         
                                <?php $__empty_1 = true; $__currentLoopData = $lista; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $linha): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <li><a href="<?php echo e(route('cardapio.categoria', $linha->id_categoria)); ?>"><?php echo e($linha->nome_categoria); ?>


                                </a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <li> Nenhuma Categoria </li>
                                <?php endif; ?>
                    
                     



                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="outer-box clearfix">
                    <div class="cart-btn">
                        <a href="#"><i class="icon flaticon-commerce"></i> <span class="count">2</span></a>
                    </div>
                    <div class="search-box">
                        <button class="search-btn"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sticky-header">
        <div class="auto-container clearfix">
            <div class="logo">
                <a href="<?php echo e(route('home')); ?>"><img src="<?php echo e(asset('davilla/images/logo-small.png')); ?>" alt="Logo"></a>
            </div>
            <div class="nav-outer">
                <nav class="main-menu">
                </nav>
            </div>
        </div>
    </div>
</header><?php /**PATH /var/www/html/resources/views/partials/header.blade.php ENDPATH**/ ?>