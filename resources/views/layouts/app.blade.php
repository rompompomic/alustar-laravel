<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'AluStar - Stikla konstrukcijas un pilna cikla būvniecība')</title>
    <meta name="description" content="@yield('meta_description', 'Inženiertehniskais uzņēmums alumīnija-stikla konstrukcijām un pilna cikla būvniecībai.')">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'AluStar - Stikla konstrukcijas un pilna cikla būvniecība')">
    <meta property="og:description" content="@yield('meta_description', 'Inženiertehniskais uzņēmums alumīnija-stikla konstrukcijām un pilna cikla būvniecībai.')">
    <meta property="og:image" content="@yield('meta_image', asset('assets/hero-steklokonstrukcii.webp'))">
    <meta property="og:site_name" content="AluStar">
    <meta property="og:locale" content="{{ str_replace('-', '_', app()->getLocale()) }}">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="@yield('title', 'AluStar - Stikla konstrukcijas un pilna cikla būvniecība')">
    <meta name="twitter:description" content="@yield('meta_description', 'Inženiertehniskais uzņēmums alumīnija-stikla konstrukcijām un pilna cikla būvniecībai.')">
    <meta name="twitter:image" content="@yield('meta_image', asset('assets/hero-steklokonstrukcii.webp'))">
    
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-background text-foreground antialiased font-sans flex flex-col min-h-screen">
    
    @include('partials.header')

    <main class="flex-grow relative w-full overflow-hidden">
        @yield('content')
    </main>

    @include('partials.footer')
    
</body>
</html>
