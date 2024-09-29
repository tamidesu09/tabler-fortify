<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iBTS</title>

    
    <link rel="stylesheet" href="{{ asset('css/tabler.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/demo.min.css') }}">
    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-1.13.5/b-2.4.1/b-colvis-2.4.1/b-html5-2.4.1/b-print-2.4.1/cr-1.7.0/datatables.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-material-ui@5.0.15/material-ui.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital@0;1&display=swap" rel="stylesheet">
    
<!-- AOS CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />

<!-- AOS JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>


    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Poppins', 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-family: 'Poppins', sans-serif; /* Set Poppins as the default font */
            font-feature-settings: "cv03", "cv04", "cv11";
        }

        #listjs.pagination li {
            display: inline-block;
            padding: 0.10rem;
        }

        #listjs.pagination li a {
            color: var(--tblr-light);
            background-color: var(--tblr-dark);
            padding: 4px 10px;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <script src="{{ asset('js/demo-theme.min.js') }}"></script>
    <div class="page">
        @auth()
        @endauth
        @include('layouts.top-navigation')

        <div class="page-wrapper">
            <div class="my-3">
                @yield('content')
            </div>
        </div>
    </div>

    <script>
  AOS.init();
</script>


    
    <script src="{{ asset('js/tabler.min.js') }}"></script>
    <script src="{{ asset('js/demo.min.js') }}"></script>
    @yield('scripts')
    @include('layouts.footer')
</body>

</html>
