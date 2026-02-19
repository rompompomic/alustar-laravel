<nav id="navbar" class="flex flex-col items-center justify-center w-full bg-background/95 backdrop-blur-sm border-b border-border sticky top-0 z-50 transition-shadow duration-300">
    <!-- Top Bar -->
    <div class="hidden lg:flex w-full border-b border-border/50">
        <div class="flex items-center justify-between w-full max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16 py-2">
            <div class="inline-flex items-center gap-3 px-[10px]">
                <a href="mailto:info@alustar.lv" class="inline-flex items-center gap-1.5 hover:opacity-80 transition-opacity">
                    <i data-lucide="mail" class="w-3 h-3 text-muted-foreground"></i>
                    <span class="font-normal text-foreground text-xs tracking-[-0.24px] leading-3 whitespace-nowrap">info@alustar.lv</span>
                </a>
                <a href="tel:+37129265665" class="inline-flex items-center gap-1.5 hover:opacity-80 transition-opacity">
                    <i data-lucide="phone" class="w-3 h-3 text-muted-foreground"></i>
                    <span class="font-normal text-foreground text-xs tracking-[-0.24px] leading-3 whitespace-nowrap">+371 29 265 665</span>
                </a>
            </div>
            
@php
    $currentRouteName = Route::currentRouteName();
    $lvUrl = url('/');
    
    // Check if we are in a named route and map back to LV
    if ($currentRouteName === 'ru.buvnieciba') {
        $lvUrl = route('buvnieciba');
    } elseif ($currentRouteName === 'ru.renovacija') {
        $lvUrl = route('renovacija');
    } elseif ($currentRouteName === 'ru.stiklokonstrukcijas') {
        $lvUrl = route('stiklokonstrukcijas');
    } elseif ($currentRouteName === 'ru.projects') {
        $lvUrl = route('projects');
    } elseif ($currentRouteName === 'project.show') {
         // Assuming same slug
         $lvUrl = route('projects'); 
    } elseif ($currentRouteName === 'ru.about') {
        $lvUrl = route('about');
    } elseif ($currentRouteName === 'ru.home') {
        $lvUrl = route('home');
    } else {
        // Fallback: remove 'ru' prefix from path
        $path = request()->path();
        if (Str::startsWith($path, 'ru/')) {
            $lvUrl = url(Str::replaceFirst('ru/', '', $path));
        } elseif ($path === 'ru') {
             $lvUrl = url('/');
        } else {
             $lvUrl = url('/');
        }
    }
@endphp
            <div class="flex items-center gap-1">
                <a href="{{ $lvUrl }}" class="px-1.5 font-normal text-xs tracking-[-0.24px] leading-3 whitespace-nowrap hover:opacity-70 transition-opacity text-foreground">
                    LV
                </a>
                <div class="w-px h-3 bg-border"></div>
                <a href="{{ url('/ru') }}" class="px-1.5 font-bold text-xs tracking-[-0.24px] leading-3 whitespace-nowrap hover:opacity-70 transition-opacity text-primary">
                    RU
                </a>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <div class="flex items-center justify-between w-full max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16 h-16 md:h-20">
        <!-- Logo -->
        <a href="{{ url('/ru') }}" class="flex items-center shrink-0 ml-2">
            <img src="{{ asset('assets/alustar-logo.webp') }}" alt="AluStar Logo" class="h-9 md:h-11 w-auto">
        </a>

        <!-- Desktop Navigation Items -->
        <ul class="hidden lg:flex items-center gap-8">
            <li>
                <a href="{{ url('/ru/stroitelstvo') }}" class="block font-medium text-foreground/80 text-sm tracking-wide hover:text-primary transition-colors duration-200 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all after:duration-300 hover:after:w-full">
                    Строительство
                </a>
            </li>
            <li>
                <a href="{{ url('/ru/renovacija') }}" class="block font-medium text-foreground/80 text-sm tracking-wide hover:text-primary transition-colors duration-200 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all after:duration-300 hover:after:w-full">
                    Реновация
                </a>
            </li>
            <li>
                <a href="{{ url('/ru/stiklokonstrukcijas') }}" class="block font-medium text-foreground/80 text-sm tracking-wide hover:text-primary transition-colors duration-200 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all after:duration-300 hover:after:w-full">
                    Стеклянные конструкции
                </a>
            </li>
            <li>
                <a href="{{ url('/ru/projects') }}" class="block font-medium text-foreground/80 text-sm tracking-wide hover:text-primary transition-colors duration-200 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all after:duration-300 hover:after:w-full">
                    Проекты
                </a>
            </li>
            <li>
                <a href="{{ url('/ru/about') }}" class="block font-medium text-foreground/80 text-sm tracking-wide hover:text-primary transition-colors duration-200 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all after:duration-300 hover:after:w-full">
                    О нас
                </a>
            </li>
            <li>
                <a href="{{ url('/ru') }}#contact" class="block font-medium text-foreground/80 text-sm tracking-wide hover:text-primary transition-colors duration-200 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-primary after:transition-all after:duration-300 hover:after:w-full">
                    Контакты
                </a>
            </li>
        </ul>

        <!-- CTA Button -->
        <div class="hidden lg:flex items-center ml-2">
            <a href="{{ url('/ru') }}#contact" class="inline-flex items-center justify-center px-5 py-2.5 bg-primary text-primary-foreground text-sm font-medium rounded-lg hover:bg-primary/90 transition-colors shadow-sm">
                Записаться на консультацию
            </a>
        </div>

    <!-- Mobile Menu Button -->
        <button id="mobile-menu-btn" class="lg:hidden p-2 text-foreground hover:bg-accent rounded-md transition-colors" aria-label="Open menu">
            <i data-lucide="menu" class="w-6 h-6"></i>
        </button>
    </div>
</nav>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu-overlay" class="fixed inset-0 bg-background/80 backdrop-blur-sm z-[60] hidden opacity-0 transition-opacity duration-300 lg:hidden">
    <!-- Mobile Menu Panel -->
    <div id="mobile-menu" class="fixed right-0 top-0 h-full w-[300px] bg-background border-l border-border shadow-xl transform translate-x-full transition-transform duration-300 ease-out z-[70] flex flex-col">
        <!-- Header -->
        <div class="flex items-center justify-between p-4 border-b border-border">
            <img src="{{ asset('assets/alustar-logo.webp') }}" alt="AluStar Logo" class="h-8 w-auto">
            <button id="mobile-menu-close" class="p-2 text-muted-foreground hover:text-foreground hover:bg-accent rounded-md transition-colors">
                <i data-lucide="x" class="w-5 h-5"></i>
            </button>
        </div>

        <!-- Contact Info & Language Switcher -->
        <div class="flex flex-col gap-3 p-4 border-b border-border bg-muted/30">
            <a href="mailto:info@alustar.lv" class="inline-flex items-center gap-2 hover:opacity-80 transition-opacity">
                <i data-lucide="mail" class="w-4 h-4 text-primary"></i>
                <span class="font-normal text-foreground text-sm">info@alustar.lv</span>
            </a>
            <a href="tel:+37129265665" class="inline-flex items-center gap-2 hover:opacity-80 transition-opacity">
                <i data-lucide="phone" class="w-4 h-4 text-primary"></i>
                <span class="font-normal text-foreground text-sm">+371 29 265 665</span>
            </a>

            <!-- Language Switcher -->
            <div class="flex items-center gap-2 pt-2">
                <a href="{{ url(Str::replaceFirst('ru', '', request()->path()) == '' ? '/' : Str::replaceFirst('ru/', '', request()->path())) }}" class="px-3 py-1 rounded text-sm font-medium transition-colors bg-muted text-muted-foreground hover:bg-muted/80">
                    LV
                </a>
                <button class="px-3 py-1 rounded text-sm font-medium transition-colors bg-primary text-primary-foreground">
                    RU
                </button>
            </div>
        </div>

        <!-- Content -->
        <div class="flex-1 overflow-y-auto py-4">
            <nav class="flex flex-col">
                <a href="{{ url('/ru/buvnieciba') }}" class="w-full text-left px-6 py-4 text-lg font-medium text-foreground hover:bg-muted transition-colors border-b border-border/50">
                    Строительство
                </a>
                <a href="{{ url('/ru/renovacija') }}" class="w-full text-left px-6 py-4 text-lg font-medium text-foreground hover:bg-muted transition-colors border-b border-border/50">
                    Реновация
                </a>
                <a href="{{ url('/ru/stiklokonstrukcijas') }}" class="w-full text-left px-6 py-4 text-lg font-medium text-foreground hover:bg-muted transition-colors border-b border-border/50">
                    Стеклянные конструкции
                </a>
                <a href="{{ url('/ru/projects') }}" class="w-full text-left px-6 py-4 text-lg font-medium text-foreground hover:bg-muted transition-colors border-b border-border/50">
                    Проекты
                </a>
                <a href="{{ url('/ru/about') }}" class="w-full text-left px-6 py-4 text-lg font-medium text-foreground hover:bg-muted transition-colors border-b border-border/50">
                    О нас
                </a>
                <a href="{{ url('/ru') }}#contact" class="w-full text-left px-6 py-4 text-lg font-medium text-foreground hover:bg-muted transition-colors border-b border-border/50">
                    Контакты
                </a>
            </nav>
        </div>

        <!-- Mobile CTA -->
        <div class="p-6 border-t border-border">
            <a href="{{ url('/ru') }}#contact" class="flex items-center justify-center gap-2 w-full py-4 bg-primary text-primary-foreground rounded-lg font-medium hover:bg-primary/90 transition-colors">
                Записаться на консультацию
                <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>
        </div>
        </div>
    </div>
</div>
