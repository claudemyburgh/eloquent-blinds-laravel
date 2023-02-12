<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <style>
        [x-clock] {
            display: none !important;
        }

    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/ts/app.ts'])
    @livewireStyles
</head>
<body class="font-sans antialiased text-gray-600">
<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    @include('layouts.dashboard.partials._nav')

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="wrapper py-6">
                {{ $header }}
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main class="wrapper my-12">
        {{ $slot }}
    </main>
</div>


@livewireScripts

</body>
</html>
