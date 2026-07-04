<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body class="bg-[#0f172a]">

<div class="flex">


    <div class="flex-1 min-h-screen lg:ml-72">

       
        <main class="p-6 lg:p-10">

            @yield('content')

        </main>

    </div>

</div>

</body>
</html>