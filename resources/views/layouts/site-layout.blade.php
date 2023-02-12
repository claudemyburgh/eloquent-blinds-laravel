<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#1B85B6"/>
    {!! SEOMeta::generate(true) !!}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,500;0,600;0,700;0,800;0,900;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,400;0,500;1,100;1,400;1,500&display=swap" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/ts/app.ts'])

@production
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TTK378M');</script>
    <!-- End Google Tag Manager -->
@endproduction

</head>
<body class="font-serif antialiased h-full flex flex-col bg-gray-50 overflow-x-hidden overflow-y-scroll">
@production
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TTK378M"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
@endproduction


<a href="#main" class="sr-only">Skip to main</a>

@include('layouts.partials._nav')

<!-- Page Heading -->
@if (isset($header))
    <header class="bg-white dark:bg-gray-800 shadow">
        <x-wrapper class="py-6">
            {{ $header }}
        </x-wrapper>
    </header>
@endif


<!-- Page Content -->
<main id="main">
    {{ $slot }}
</main>

{{--@include('layouts.partials._stats')--}}

<x-contact-us/>

@include('layouts.partials._footer')
@include('layouts.partials._scroll-top')

<div aria-hidden="true" class="h-full w-full fixed top-0 left-0 blur-3xl -z-10 pointer-events-none opacity-40">
    <div class="absolute h-1/2 -left-12 -top-12 rounded-full w-1/2 bg-primary-500/30  "></div>
    <div class="absolute h-1/2 bottom-0 right-0 rounded-full w-1/2 bg-amber-500/5  "></div>
</div>


</body>
</html>
