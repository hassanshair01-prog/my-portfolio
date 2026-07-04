<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title','Hassan Portfolio')</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">

</head>

<body class="bg-slate-950 text-white overflow-x-hidden">

    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Floating Right Widget --}}
    @include('layouts.sidebar')

    {{-- Main --}}
    <main class="pt-28">

        @yield('content')

    </main>

    {{-- Footer --}}
    @include('layouts.footer')

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        AOS.init({
            duration:800,
            once:true
        });
    </script>

</body>

</html>