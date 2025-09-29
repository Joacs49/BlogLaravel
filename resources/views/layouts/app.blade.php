<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="flex min-h-screen lg:overflow-hidden">
        <!-- Sidebar -->
        <aside class="hidden lg:block w-64 bg-gray-100">
            <x-blog.blog />
        </aside>
        <!-- Main content -->
        <main class="flex-1 overflow-y-auto">
            @yield('content')
        </main>
    </div>
</body>

</html>