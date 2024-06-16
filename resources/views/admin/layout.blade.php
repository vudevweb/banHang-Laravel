<!DOCTYPE html>
<html lang="en">

<head>
    <base href="{{ url('/') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ? $title : 'Chưa có tiêu đề' }}</title>
    @if (isset($css))
        <link href="{{ $css }}" rel="stylesheet">
    @endif
    <!-- Libs CSS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <link href="/assets/base/fonts/feather/feather.css" rel="stylesheet">
    <link href="/assets/base/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="/assets/base/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="/assets/base/libs/simplebar/dist/simplebar.min.css" rel="stylesheet">

    <link href="/assets/base/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="/assets/base/css/theme.min.css">
    <link href="/assets/base/libs/prismjs/themes/prism-okaidia.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/base/libs/tiny-slider/dist/tiny-slider.css">
    <link rel="stylesheet" href="/assets/base/css/my_cus.css">
</head>

<body>
    <div id="db-wrapper">
        @include('admin.components.sidebar')
        <main id="page-content">
            @include('admin.components.header')
            <section class="container-fluid p-4">
                @yield('page')
            </section>
        </main>
    </div>

    <!-- Scripts -->

    <!-- Libs JS -->
    {{-- <script src="/assets/base/libs/jquery/dist/jquery.min.js"></script> --}}
    <script src="/assets/base/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/base/libs/simplebar/dist/simplebar.min.js"></script>

    <script src="/assets/base/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/assets/base/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="/assets/base/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>

    <script src="/assets/base/js/theme.min.js"></script>
    <script src="/assets/base/js/vendors/sidebarMenu.js"></script>
    <script src="/assets/base/libs/prismjs/prism.js"></script>
    <script src="/assets/base/libs/prismjs/components/prism-scss.min.js"></script>
    <script src="/assets/base/libs/prismjs/plugins/toolbar/prism-toolbar.min.js"></script>
    <script src="/assets/base/libs/prismjs/plugins/copy-to-clipboard/prism-copy-to-clipboard.min.js"></script>
    <script src="/assets/base/libs/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="/assets/base/libs/@popperjs/core/dist/umd/popper.min.js"></script>
    <script src="/assets/base/libs/tippy.js/dist/tippy-bundle.umd.min.js"></script>
    <script src="/assets/base/js/vendors/tnsSlider.js"></script>
    <script src="/assets/base/js/vendors/tooltip.js"></script>

    <script src="/assets/base/js/scrollSmooth/SmoothScroll.js"></script>
    <script src="/assets/custom/library/library.js"></script>
    <script src="/assets/custom/library/location.js"></script>

    @if (isset($js))
        <script src="{{ $js }}"></script>
    @endif

    <script>
        var BASE_URL = '{{ url('/') }}';
    </script>
</body>

</html>
