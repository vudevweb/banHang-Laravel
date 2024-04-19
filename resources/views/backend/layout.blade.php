<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>{{ $title }}</title>

     <!-- Libs CSS -->
     <link href="/assets/base/fonts/feather/feather.css" rel="stylesheet">
     <link href="/assets/base/libs/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
     <link href="/assets/base/libs/@mdi/font/css/materialdesignicons.min.css" rel="stylesheet" />
     <link href="/assets/base/libs/simplebar/dist/simplebar.min.css" rel="stylesheet">

     <link href="/assets/base/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
     <!-- Theme CSS -->
     <link rel="stylesheet" href="/assets/base/css/theme.min.css">
     <link href="/assets/base/libs/prismjs/themes/prism-okaidia.min.css" rel="stylesheet">
     <link rel="stylesheet" href="/assets/base/libs/tiny-slider/dist/tiny-slider.css">
</head>

<body>

     <div id="db-wrapper">
          <!-- navbar vertical -->
          <!-- Sidebar -->
          @include('backend.components.sidebar')
          <!-- Page Content -->
          <main id="page-content">

               <!-- Page Header -->
               @include('backend.components.header')
               <!-- Container fluid -->
               <section class="container-fluid p-4">
                    @include($page)
               </section>
          </main>
     </div>

     <!-- Scripts -->

     <!-- Libs JS -->
     <script src="/assets/base/libs/jquery/dist/jquery.min.js"></script>
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
</body>

</html>