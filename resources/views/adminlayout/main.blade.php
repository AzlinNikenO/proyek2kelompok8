<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Admin Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- AdminLTE -->
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">

    @yield('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

    {{-- NAVBAR --}}
    @include('adminlayout.navbar')

    {{-- SIDEBAR --}}
    @include('adminlayout.sidebar')

    {{-- CONTENT --}}
    <div class="content-wrapper">
        <section class="content pt-3">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>
    </div>

    {{-- FOOTER --}}
    <footer class="main-footer text-center">
        <strong>© {{ date('Y') }} EazyDesa</strong>
    </footer>

</div>

<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE -->
<script src="{{ asset('adminlte/dist/js/adminlte.min.js') }}"></script>

@yield('javascript')

</body>
</html>
