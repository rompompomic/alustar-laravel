<!DOCTYPE html>
<html lang="ru" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'AluStar - Стеклянные конструкции и строительство полного цикла')</title>
    <meta name="description" content="@yield('meta_description', 'Инженерно-техническое предприятие по алюминиево-стеклянным конструкциям и строительству полного цикла.')">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'AluStar - Стеклянные конструкции и строительство полного цикла')">
    <meta property="og:description" content="@yield('meta_description', 'Инженерно-техническое предприятие по алюминиево-стеклянным конструкциям и строительству полного цикла.')">
    <meta property="og:image" content="@yield('meta_image', asset('assets/hero-steklokonstrukcii.webp'))">
    <meta property="og:site_name" content="AluStar">
    <meta property="og:locale" content="ru_RU">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="@yield('title', 'AluStar - Стеклянные конструкции и строительство полного цикла')">
    <meta name="twitter:description" content="@yield('meta_description', 'Инженерно-техническое предприятие по алюминиево-стеклянным конструкциям и строительству полного цикла.')">
    <meta name="twitter:image" content="@yield('meta_image', asset('assets/hero-steklokonstrukcii.webp'))">
    
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-background text-foreground antialiased font-sans flex flex-col min-h-screen">
    
    @include('partials.ru.header')

    <main class="flex-grow relative w-full overflow-hidden">
        @yield('content')
    </main>

    @include('partials.ru.footer')
    
</body>
</html>