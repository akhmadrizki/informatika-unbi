<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ $title }} &mdash; Informatika UNBI</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('dashboard-assets/modules/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard-assets/modules/summernote/summernote-bs4.css')}} ">

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
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="{{ asset('dashboard-assets/js/stisla.js') }}"></script>
    <script src="{{ asset('dashboard-assets/modules/moment.min.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ asset('dashboard-assets/modules/summernote/summernote-bs4.js')}} "></script>
    <script src="{{ asset('dashboard-assets/modules/datatables/datatables.min.js')}}"></script>
    <script src="{{ asset('dashboard-assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('dashboard-assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js')}}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('dashboard-assets/js/page/modules-datatables.js')}}"></script>

    <!-- Template JS File -->
    <script src="{{asset('dashboard-assets/js/scripts.js')}}"></script>
    <script src="{{asset('dashboard-assets/js/custom.js')}}"></script>
</body>
</html>
