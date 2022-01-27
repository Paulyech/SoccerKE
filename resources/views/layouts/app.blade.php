<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> {{config('app.name')}} </title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>

    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">


    

    {{-- <link rel="stylesheet" href="css/app.css"> --}}
     <!-- Scripts -->
     {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <style>
        #menu-toggle:checked + #menu{
            display: block;
            padding-left: 8px;
        }
        li {
            display: list-item;
            list-style-position: inside;
            }
    </style>
</head>
<body>
    <div >
        @include('inc.navbar')
        <main style=" background-position:center; background-size:cover;min-height:100vh;background-attachment:fixed;">
            @yield('content')
            
        </main>
        @include('inc.footer')
        @include('sweetalert::alert')
    </div>

    <script src="js/app.js" > </script>

</body>
</html>