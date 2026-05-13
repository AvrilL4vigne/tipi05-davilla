<!DOCTYPE html>
<html lang="pt-BR">

<head>
    @include('admin.partials.head')
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

    <div class="app-wrapper">

        @include('admin.partials.header')

        @include('admin.partials.app-slidebar')


        <main>
            @yield('content')
        </main>


        @include('admin.partials.app-footer')

    </div>



</body>

</html>