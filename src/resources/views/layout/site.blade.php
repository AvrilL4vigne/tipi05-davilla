<!DOCTYPE html>
<html lang="pt-BR">

<head>
    @include('partials.head')
</head>

<body>

    <div class="page-wrapper">

        @include('partials.preloader')

        @include('partials.header')

        <main>
            @yield('content')

            @include('partials.slider')

            @include('partials.services')

            @include('partials.action')

            @include('partials.portifolio')

            @include('partials.features')

            @include('partials.testimonials')

            @include('partials.pricing')

        </main>

        @include('partials.footer')

    </div><!-- End Page Wrapper -->

    @include('partials.script')
    @include('partials.scroll')

</body>

</html>