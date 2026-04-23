<header class="main-header">
    <div class="menu_wave"></div>

    <div class="main-box">
        <div class="menu-box">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('davilla/images/logo-davilla.svg') }}" width="100px" height="100px"
                        alt="Logo Davilla">
                </a>
            </div>

            <div class="nav-outer clearfix">
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">

                        <ul class="navigation menu-left clearfix">
                            <li class="{{ Route::is('home') ? 'current' : '' }}">
                                <a href="{{ route('home') }}">Home</a>
                            </li>

                            <li class="{{ Route::is('sobre') ? 'current' : '' }}">
                                <a href="{{ route('sobre') }}">Sobre Nós</a>
                            </li>

                            <li class="{{ Route::is('services') ? 'current' : '' }}">
                                <a href="{{ route('services') }}">Nossos Serviços</a>
                            </li>

                            <li class="{{ Route::is('recipes') ? 'current' : '' }}">
                                <a href="{{ route('recipes') }}">Receitas</a>
                            </li>
                        </ul>

                        <ul class="navigation menu-right clearfix">
                            <li class="dropdown"><a href="#">Onde Entregamos</a>
                                <ul>
                                    <li><a href="#">Zona Leste</a></li>
                                    <li><a href="#">Zona Norte</a></li>
                                    {{-- Mantido como âncora para a home na seção action --}}
                                    <li><a href="{{ route('home') }}#action">Regras de Entrega</a></li>
                                </ul>
                            </li>

                            <li class="{{ Route::is('pricing') ? 'current' : '' }}">
                                <a href="{{ route('pricing') }}">Preços</a>
                            </li>

                            <li class="{{ Route::is('portfolioo') ? 'current' : '' }}">
                                <a href="{{ route('portfolioo') }}">Portfólio</a>
                            </li>

                            <li class="{{ Route::is('testimonials') ? 'current' : '' }}">
                                <a href="{{ route('testimonials') }}">Depoimentos</a>
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
                <a href="{{ route('home') }}"><img src="{{ asset('davilla/images/logo-small.png') }}" alt="Logo"></a>
            </div>
            <div class="nav-outer">
                <nav class="main-menu">
                </nav>
            </div>
        </div>
    </div>
</header>