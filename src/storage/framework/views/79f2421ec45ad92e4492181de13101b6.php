<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">

    
    <div class="sidebar-brand">
        <a href="<?php echo e(route('admin.dash')); ?>" class="brand-link">

            
            

            <span class="brand-text fw-light">DaVilla Admin</span>
        </a>
    </div>

    
    <div class="sidebar-wrapper">

        <nav class="mt-2">

            <ul
                class="nav sidebar-menu flex-column"
                data-lte-toggle="treeview"
                role="navigation"
                aria-label="Menu principal"
                data-accordion="false"
                id="navigation">

                
                <li class="nav-item">
                    <a href="<?php echo e(route('admin.dash')); ?>" class="nav-link active">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                
                <li class="nav-header">GESTÃO DE CATÁLOGO</li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-shop"></i>
                        <p>
                            Catálogo
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.categoria.index')); ?>" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Categorias</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Produtos</p>
                            </a>
                        </li>

                    </ul>
                </li>

                
                <li class="nav-header">GESTÃO COMERCIAL</li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-cash-coin"></i>
                        <p>
                            Comercial
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Clientes</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Pedidos</p>
                            </a>
                        </li>

                    </ul>
                </li>

                
                <li class="nav-header">GESTÃO DE ESTOQUE</li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-box-seam"></i>
                        <p>
                            Estoque
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Matérias-primas</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Movimentações de estoque</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Fornecedores</p>
                            </a>
                        </li>

                    </ul>
                </li>

                
                <li class="nav-header">SITE</li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-window"></i>
                        <p>
                            Conteúdo do Site
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Banners</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Mensagens de contato</p>
                            </a>
                        </li>

                    </ul>
                </li>

                
                <li class="nav-header">SISTEMA</li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-gear"></i>
                        <p>
                            Sistema
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Usuários</p>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>

        </nav>

    </div>

</aside><?php /**PATH /var/www/html/resources/views/admin/partials/app-slidebar.blade.php ENDPATH**/ ?>