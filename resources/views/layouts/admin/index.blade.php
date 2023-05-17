<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ $title }} &mdash; Informatika UNBI</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/css/components.css') }}">
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            @include('layouts.admin.header')
            <div class="main-sidebar sidebar-style-2">
                @include('layouts.admin.sidebar')
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>{{ $header }}</h1>

                        @if (isset($breadcrumbs))
                            {{ $breadcrumbs }}
                        @endif
                    </div>

                    <div class="section-body">
                        {{ $slot }}
                    </div>
                </section>
            </div>

            <!-- Footer Content -->
            <footer class="main-footer">
                @include('layouts.admin.footer')
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('dashboard-assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/modules/popper.js') }}"></script>
    <script src="{{ asset('dashboard-assets/modules/tooltip.js') }}"></script>
    <script src="{{ asset('dashboard-assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/modules/moment.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{asset('dashboard-assets/js/scripts.js')}}"></script>
    <script src="{{asset('dashboard-assets/js/custom.js')}}"></script>
</body>
</html>
