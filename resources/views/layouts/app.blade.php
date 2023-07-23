<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="{{asset('css/tabler.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/demo.min.css')}}">

    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
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

</body>

</html>