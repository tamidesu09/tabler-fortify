<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="{{asset('css/tabler.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/demo.min.css')}}">
    <link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-1.13.5/b-2.4.1/b-colvis-2.4.1/b-html5-2.4.1/b-print-2.4.1/cr-1.7.0/datatables.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }


        #listjs.pagination li {
            display: inline-block;
            padding: 0.10rem;
        }

        #listjs.pagination li a {
            color: #fff;
            background-color: var(--tblr-primary);
            padding: 4px 10px;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <script src="{{asset('js/demo-theme.min.js')}}"></script>
    <div class="page">

        @auth()
        @include('layouts.sidebar')
        @endauth
        @include('layouts.top-navigation')

        <div class="page-wrapper">
            <div class="my-3">
                @yield('content')

            </div>
        </div>
    </div>


    <script src="{{asset('js/tabler.min.js')}}"></script>
    <script src="{{asset('js/demo.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-1.13.5/b-2.4.1/b-colvis-2.4.1/b-html5-2.4.1/b-print-2.4.1/cr-1.7.0/datatables.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
    @yield('scripts')
</body>

</html>