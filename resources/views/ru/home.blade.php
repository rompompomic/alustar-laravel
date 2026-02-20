@extends('layouts.app-ru')

@section('title', 'Стеклянные конструкции и строительство - AluStar')
@section('meta_description', 'AluStar предлагает высококачественные стеклянные конструкции и услуги строительства полного цикла для жилых и коммерческих объектов.')

@section('content')
<!-- Hero Section -->
<div class="relative w-full overflow-hidden">
    <!-- Mobile & Tablet: Stacked Layout with Diagonal Join -->
    <div class="lg:hidden flex flex-col">
        <section class="relative w-full h-[50svh] min-h-[410px] max-h-[510px] overflow-hidden" style="clip-path: polygon(0 0, 100% 0, 100% 81%, 0 100%)">
            <div class="absolute inset-0 scale-125 bg-cover bg-center" style="background-image: url('{{ asset('assets/hero-glass.webp') }}')"></div>
            <div class="absolute inset-0" style="background-color: rgba(0, 0, 0, 0.7);"></div>
            <div class="relative h-full flex flex-col justify-end px-4 sm:px-6 pb-24 sm:pb-28">
                <div class="flex flex-col items-start gap-3 w-full animate-fade-up">
                    <h1 class="font-semibold text-primary-foreground text-xl sm:text-2xl tracking-[-0.72px] leading-tight">СТЕКЛЯННЫЕ КОНСТРУКЦИИ</h1>
                    <p class="font-medium text-primary-foreground/90 text-sm sm:text-base tracking-[0.72px]">Фасады, окна, двери, перегородки</p>
                    <a href="{{ url('/ru/stiklokonstrukcijas') }}" class="flex items-center justify-between gap-3 px-4 py-2.5 rounded-lg bg-brand-green hover:opacity-90 hover:shadow-lg transition-all duration-200">
                        <span class="font-medium text-primary-foreground text-sm tracking-[-0.48px] whitespace-nowrap">Узнать больше</span>
                        <i data-lucide="arrow-right" class="w-3.5 h-3.5 text-primary-foreground"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Construction Section - Mobile/Tablet -->
        <section class="relative w-full h-[50svh] min-h-[380px] max-h-[480px] md:h-[50svh] md:min-h-[380px] md:max-h-[460px] overflow-hidden -mt-[14svh] md:-mt-[12svh]" style="clip-path: polygon(0 15%, 100% 0, 100% 100%, 0 100%)">
            <div class="absolute inset-0 scale-125 bg-cover bg-center" style="background-image: url('{{ asset('assets/hero-construction.webp') }}')"></div>
            <div class="relative h-full flex flex-col justify-end px-4 sm:px-6 pb-12 sm:pb-14">
                <div class="flex flex-col items-start gap-3 w-full animate-fade-up">
                    <h1 class="font-semibold text-secondary-foreground text-xl sm:text-2xl tracking-[-0.72px] leading-tight">СТРОИТЕЛЬСТВО</h1>
                    <p class="font-medium text-secondary-foreground/90 text-sm sm:text-base tracking-[0.72px]">Строительные услуги полного цикла</p>
                    <a href="{{ url('/ru/buvnieciba') }}" class="flex items-center justify-between gap-3 px-4 py-2.5 rounded-lg bg-brand-gray hover:opacity-90 hover:shadow-lg transition-all duration-200">
                        <span class="font-medium text-secondary-foreground text-sm tracking-[-0.48px] whitespace-nowrap">Узнать больше</span>
                        <i data-lucide="arrow-right" class="w-3.5 h-3.5 text-secondary-foreground"></i>
                    </a>
                </div>
            </div>
        </section>
    </div>

    <!-- Desktop: Original Overlapping Layout -->
    <div class="hidden lg:block relative w-full h-[780px]">
        <!-- Glass Construction Section -->
        <section class="absolute left-0 top-0 w-[54%] h-full bg-muted bg-cover bg-no-repeat bg-center z-10 contrast-[1.1] saturate-[0.95]" style="background-image: url('{{ asset('assets/hero-glass.webp') }}'); clip-path: polygon(0 0, 100% 0, 85% 100%, 0 100%)">
            <div class="absolute inset-0" style="background-color: rgba(0, 0, 0, 0.45);"></div>
            <div class="relative flex flex-col items-start gap-11 mt-[420px] ml-[100px] w-[336px]">
                <div class="flex flex-col items-start gap-3.5 w-full animate-fade-up">
                    <h1 class="font-semibold text-primary-foreground text-4xl tracking-[-0.72px] leading-[38px]">СТЕКЛЯННЫЕ КОНСТРУКЦИИ</h1>
                    <p class="font-medium text-primary-foreground/90 text-lg tracking-[0.72px]">Фасады, окна, двери, перегородки</p>
                </div>
                <a href="{{ url('/ru/stiklokonstrukcijas') }}" class="flex items-center justify-between w-[194px] px-5 py-3 rounded-lg bg-brand-green hover:opacity-90 hover:shadow-lg transition-all duration-200 animate-fade-up" style="animation-delay: 0.2s">
                    <span class="font-medium text-primary-foreground text-base tracking-[-0.48px] whitespace-nowrap">Узнать больше</span>
                    <i data-lucide="arrow-right" class="w-3.5 h-3.5 text-primary-foreground"></i>
                </a>
            </div>
        </section>

        <!-- Construction Section -->
        <section class="absolute right-0 top-0 w-[55%] h-full bg-cover bg-center contrast-[1.05] saturate-[0.9]" style="background-image: url('{{ asset('assets/hero-construction.webp') }}'); clip-path: polygon(15% 0, 100% 0, 100% 100%, 0 100%)">
            <div class="absolute inset-0" style="background-color: rgba(0, 0, 0, 0.45);"></div>
            <div class="relative flex flex-col items-start gap-11 mt-[450px] ml-[260px] w-[336px]">
                <div class="flex flex-col items-start gap-3.5 w-full animate-fade-up">
                    <h1 class="font-semibold text-secondary-foreground text-4xl tracking-[-0.72px] leading-[38px]">СТРОИТЕЛЬСТВО</h1>
                    <p class="font-medium text-secondary-foreground/90 text-lg tracking-[0.72px]">Строительные услуги полного цикла</p>
                </div>
                <a href="{{ url('/ru/buvnieciba') }}" class="flex items-center justify-between w-[194px] px-5 py-3 rounded-lg bg-brand-gray hover:opacity-90 hover:shadow-lg transition-all duration-200 animate-fade-up" style="animation-delay: 0.2s">
                    <span class="font-medium text-secondary-foreground text-base tracking-[-0.48px] whitespace-nowrap">Узнать больше</span>
                    <i data-lucide="arrow-right" class="w-3.5 h-3.5 text-secondary-foreground"></i>
                </a>
            </div>
        </section>
    </div>

    <!-- Bottom Wave with Text -->
    <div class="absolute left-0 bottom-0 w-full z-20 pointer-events-none">
        <svg viewBox="0 0 1280 107" class="w-full h-[40px] sm:h-[45px] md:h-[50px] lg:h-[70px] block translate-y-1" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <mask id="waveMask">
                    <path d="M1280 106.131H0V88.1314L593.531 4.93736C642.582 -1.93806 692.373 -1.6313 741.336 5.84799L1280 88.1314V106.131Z" fill="white" />
                </mask>
            </defs>
            <rect width="1280" height="107" fill="#E8E8EE" mask="url(#waveMask)" />
        </svg>
        <p class="absolute bottom-[2px] lg:bottom-2 left-1/2 -translate-x-1/2 font-light text-foreground text-xs sm:text-sm md:text-base tracking-[0.48px] whitespace-nowrap">
            В Риге с 2007 года
        </p>
    </div>
</div>

<!-- About Section -->
<section id="about" class="w-full py-16 md:py-24 bg-[#e8e8ee]">
    <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl lg:text-5xl text-foreground tracking-tight font-extrabold max-w-[900px] mx-auto leading-tight">
                Полная инженерно-техническая и юридическая ответственность
            </h2>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center mb-12 lg:mb-16">
            <div class="flex flex-col justify-center space-y-6 lg:space-y-8">
                <p class="text-base md:text-lg text-muted-foreground leading-relaxed">
                    AluStar — это инженерно-техническое предприятие, специализирующееся на проектировании, производстве и монтаже алюминиево-стеклянных конструкций, а также на строительстве полного цикла.
                </p>
                <p class="text-base md:text-lg text-muted-foreground leading-relaxed">
                    Мы берем на себя инженерно-техническую и юридическую ответственность за принятые решения и их реализацию.
                </p>
                <div class="pt-2 lg:pt-4">
                     <a href="{{ route('ru.about') }}" class="inline-flex items-center justify-center rounded-lg text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring disabled:opacity-50 disabled:pointer-events-none ring-offset-background bg-primary text-primary-foreground hover:bg-primary/90 h-11 px-8 shadow-sm">
                        Узнать больше
                    </a>
                </div>
            </div>
            <div class="relative">
                 <div class="rounded-2xl overflow-hidden shadow-2xl border border-white/20">
                    <img src="{{ asset('assets/asset2.webp') }}" alt="Команда AluStar в работе" class="w-full h-auto object-cover hover:scale-105 transition-transform duration-700">
                </div>
            </div>
        </div>
        
        <!-- Stats Row -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                <div class="flex flex-col items-center justify-center p-6 bg-background rounded-xl border border-border/50 transition-all duration-300 hover:shadow-lg hover:border-primary/30 min-h-[120px] text-center">
                    <span class="text-3xl md:text-4xl font-semibold text-primary mb-2">2007</span>
                    <span class="text-sm text-muted-foreground">Начало деятельности</span>
                </div>
                <div class="flex flex-col items-center justify-center p-6 bg-background rounded-xl border border-border/50 transition-all duration-300 hover:shadow-lg hover:border-primary/30 min-h-[120px] text-center">
                    <span class="text-3xl md:text-4xl font-semibold text-primary mb-2">EU</span>
                    <span class="text-sm text-muted-foreground">Европейские стандарты</span>
                </div>
                <div class="flex flex-col items-center justify-center p-6 bg-background rounded-xl border border-border/50 transition-all duration-300 hover:shadow-lg hover:border-primary/30 min-h-[120px] text-center">
                    <span class="text-3xl md:text-4xl font-semibold text-primary mb-2">100%</span>
                    <span class="text-sm text-muted-foreground">Полная ответственность</span>
                </div>
        </div>
    </div>
</section>

<!-- Why Alustar Section -->
<section class="w-full py-16 md:py-24 bg-[#e8e8ee]">
    <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
        <div class="text-center mb-12 md:mb-16">
            <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-3">Почему AluStar</span>
            <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-foreground tracking-tight">Надежность, доказанная на практике</h2>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 mb-16">
            <div class="group p-6 md:p-8 bg-muted/50 rounded-2xl text-center transition-all duration-300 hover:bg-primary hover:shadow-lg">
                <div class="text-3xl md:text-4xl lg:text-5xl font-bold text-primary group-hover:text-primary-foreground transition-colors duration-300 mb-2">19+</div>
                <div class="text-sm text-muted-foreground group-hover:text-primary-foreground/80 transition-colors duration-300 uppercase tracking-wide">лет на рынке</div>
            </div>
            <div class="group p-6 md:p-8 bg-muted/50 rounded-2xl text-center transition-all duration-300 hover:bg-primary hover:shadow-lg">
                <div class="text-3xl md:text-4xl lg:text-5xl font-bold text-primary group-hover:text-primary-foreground transition-colors duration-300 mb-2">200+</div>
                <div class="text-sm text-muted-foreground group-hover:text-primary-foreground/80 transition-colors duration-300 uppercase tracking-wide">проектов</div>
            </div>
            <div class="group p-6 md:p-8 bg-muted/50 rounded-2xl text-center transition-all duration-300 hover:bg-primary hover:shadow-lg">
                <div class="text-3xl md:text-4xl lg:text-5xl font-bold text-primary group-hover:text-primary-foreground transition-colors duration-300 mb-2">150k+</div>
                <div class="text-sm text-muted-foreground group-hover:text-primary-foreground/80 transition-colors duration-300 uppercase tracking-wide">м² построек</div>
            </div>
            <div class="group p-6 md:p-8 bg-muted/50 rounded-2xl text-center transition-all duration-300 hover:bg-primary hover:shadow-lg">
                <div class="text-3xl md:text-4xl lg:text-5xl font-bold text-primary group-hover:text-primary-foreground transition-colors duration-300 mb-2">EU</div>
                <div class="text-sm text-muted-foreground group-hover:text-primary-foreground/80 transition-colors duration-300 uppercase tracking-wide">стандарты</div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
            <div class="p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50 transition-all duration-300 hover:border-primary/30 hover:shadow-md">
                <div class="w-10 h-1 bg-primary rounded-full mb-6"></div>
                <h4 class="text-lg font-semibold text-foreground mb-3">Инженерно-техническая ответственность</h4>
                <p class="text-sm text-muted-foreground leading-relaxed">Ответственность за расчет конструкций, выбор материалов и качество монтажа.</p>
            </div>
            <div class="p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50 transition-all duration-300 hover:border-primary/30 hover:shadow-md">
                <div class="w-10 h-1 bg-primary rounded-full mb-6"></div>
                <h4 class="text-lg font-semibold text-foreground mb-3">Юридическая ответственность</h4>
                <p class="text-sm text-muted-foreground leading-relaxed">Договорная ответственность за выполнение обязательств, соблюдение сроков и предоставление гарантии.</p>
            </div>
            <div class="p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50 transition-all duration-300 hover:border-primary/30 hover:shadow-md">
                <div class="w-10 h-1 bg-primary rounded-full mb-6"></div>
                <h4 class="text-lg font-semibold text-foreground mb-3">Документация и соответствие</h4>
                <p class="text-sm text-muted-foreground leading-relaxed">Все объекты сдаются с полной технической документацией и документацией соответствия.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<!-- CTA Section -->
@include('partials.ru.cta-section')
@endsection
