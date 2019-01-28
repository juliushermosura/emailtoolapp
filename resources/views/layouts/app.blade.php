<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SUCCESS BLOCK - Email Tool</title>
    @include('partials.head')
</head>
<body data-ma-theme="blue">
    <main class="main">
        <!-- Header -->
        @include('partials.header')

        <!-- Sidebar -->
        @include('partials.sidebar')

        <!-- Contents -->
        <section class="content">
            <div class="content__inner">
                <!-- Page Contents -->
                @yield('content')

                <!-- Footer -->
                @include('partials.footer')
            </div>
        </section>
    </main>

    <!-- Javascript -->
    @yield('pre-scripts')
    <!-- Vendors -->
    <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

    <!-- App functions -->
    <script src="js/app.min.js"></script>
    <script>
        $.ajaxSetup({headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    </script>
    @yield('post-scripts')
</body>
</html>