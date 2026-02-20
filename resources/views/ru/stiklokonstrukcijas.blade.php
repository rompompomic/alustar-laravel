@extends('layouts.app-ru')

@section('title', 'Стеклянные конструкции - AluStar')
@section('meta_description', 'Предлагаем проектирование, производство и монтаж алюминиево-стеклянных конструкций, обеспечивая высокое качество.')

@section('content')
    @php
    $clientTypes = [
        [
            "id" => "developers",
            "icon" => "building-2",
            "title" => "Девелоперам",
            "items" => [
                "Фасадные системы для многоквартирных домов",
                "Панорамное остекление",
                "Входные группы",
                "Оптимизация стоимости фасада",
                "Работа в рамках генподряда"
            ]
        ],
        [
            "id" => "commercial",
            "icon" => "landmark",
            "title" => "Инвесторам и заказчикам",
            "items" => [
                "Остекление офисных зданий",
                "Витражные системы",
                "Фасады для торговых центров",
                "Входные группы",
                "Стеклянные перегородки"
            ]
        ],
        [
            "id" => "private",
            "icon" => "home",
            "title" => "Частным клиентам",
            "items" => [
                "Панорамные окна",
                "Раздвижные системы",
                "Конструкции для террас",
                "Зимние сады",
                "Индивидуальные проекты"
            ]
        ]
    ];

    $solutions = [
        [
            "icon" => "building-2",
            "title" => "Алюминиевые фасады",
            "items" => ["Стоечно-ригельные системы", "Структурное остекление", "Панорамные фасады", "Витражные конструкции"]
        ],
        [
            "icon" => "home",
            "title" => "Окна",
            "items" => ["Пластиковые окна", "Алюминиевые окна", "Дерево-алюминиевые системы", "Энергоэффективные стеклопакеты"]
        ],
        [
            "icon" => "door-open",
            "title" => "Дверные системы",
            "items" => [
                "Входные алюминиевые двери",
                "Противопожарные двери",
                "Автоматические двери",
                "Решения по тепло- и звукоизоляции"
            ]
        ],
        [
            "icon" => "layers",
            "title" => "Стеклянные перегородки",
            "items" => ["Офисные системы", "Интерьерные решения", "Мобильные конструкции"]
        ],
        [
            "icon" => "panel-left-open",
            "title" => "Раздвижные и панорамные системы",
            "items" => ["Портальные системы", "Раздвижные конструкции для террас", "Складные системы"]
        ],
        [
            "icon" => "maximize",
            "title" => "Безрамные стеклянные конструкции",
            "items" => ["Безрамные перегородки", "Стеклянные двери", "Стеклянные перила", "Стеклянные балконные системы"]
        ],
        [
            "icon" => "snowflake",
            "title" => "Индивидуальные алюминиевые конструкции",
            "items" => ["Зимние сады", "Навесы", "Стеклянные ограждения"]
        ]
    ];

    $materials = [
        "Системы алюминиевых профилей",
        "Системы пластиковых профилей",
        "Дерево и дерево-алюминий",
        "Энергоэффективные стеклопакеты",
        "Современная фурнитура",
        "Автоматизированные системы открывания",
    ];

    $workProcess = [
        [
            "icon" => "file-text",
            "title" => "Проектирование",
            "items" => ["Разработка технических решений", "Конструкторская документация", "Согласование узлов"]
        ],
        [
            "icon" => "settings",
            "title" => "Производство",
            "items" => ["Изготовление конструкций", "Контроль качества", "Подготовка к монтажу"]
        ],
        [
            "icon" => "wrench",
            "title" => "Монтаж",
            "items" => ["Профессиональная установка", "Работа на жилых и коммерческих объектах", "Соблюдение сроков"]
        ],
        [
            "icon" => "shield",
            "title" => "Сервис",
            "items" => ["Гарантийное обслуживание", "Регулировка и уход"]
        ]
    ];

    $whyUs = [
        ["icon" => "award", "title" => "Опыт 19+ лет", "desc" => "Сотни реализованных проектов фасадов и остекления в жилом и коммерческом сегментах."],
        ["icon" => "layers", "title" => "Комплексный подход", "desc" => "От проектирования до монтажа — всё в одной компании без цепочек посредников."],
        ["icon" => "building-2", "title" => "Формат генподряда", "desc" => "Интегрируемся в строительный процесс и работаем согласно общему графику."],
        ["icon" => "shield", "title" => "Гарантия до 5 лет", "desc" => "Европейские стандарты качества и сертифицированные материалы с долгосрочной гарантией."],
        ["icon" => "trending-up", "title" => "Прозрачная смета", "desc" => "Детальный расчет стоимости без скрытых позиций — вы видите каждый цент."],
        ["icon" => "clock", "title" => "Контроль сроков", "desc" => "Точный график работ с еженедельной отчетностью и гарантированным соблюдением сроков."]
    ];

    @endphp

    <div class="flex flex-col items-start min-h-screen w-full">
        <!-- HERO -->
        <section class="relative w-full h-[500px] md:h-[600px] overflow-hidden">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('assets/hero-steklokonstrukcii.webp') }}')"></div>
            <div class="absolute inset-0" style="background-color: rgba(0, 0, 0, 0.7);"></div>
            <div class="relative h-full flex items-end">
                <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16 w-full pb-16 md:pb-20">
                    <span class="inline-block text-xs font-medium text-primary-foreground/70 uppercase tracking-widest mb-4">
                        Стеклянные конструкции
                    </span>
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-primary-foreground tracking-tight mb-4 max-w-3xl">
                        Стеклянные конструкции и алюминиевые фасадные системы
                    </h1>
                    <p class="text-base md:text-lg text-primary-foreground/80 mb-2 max-w-2xl">
                        Производство, проектирование и монтаж по всей Латвии.
                    </p>
                    <p class="text-sm text-primary-foreground/60 mb-8">
                        Работаем как самостоятельный подрядчик и в составе генподряда.
                    </p>
                    <div class="flex flex-wrap gap-3">
                        <a href="{{ url('/') }}#contact" class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-primary-foreground rounded-lg font-medium hover:bg-primary/90 transition-all">
                            Получить расчет <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                        <a href="{{ url('/') }}#contact" class="inline-flex items-center gap-2 px-6 py-3 bg-background text-foreground rounded-lg font-medium hover:bg-muted transition-all">
                            Обсудить проект
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- CLIENTS (FOR WHOM) -->
        <section class="w-full py-16 md:py-24 bg-background">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-3">Клиентам</span>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-foreground tracking-tight">Для кого мы работаем</h2>
                </div>
                 <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    @foreach($clientTypes as $client)
                    <div class="p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center">
                                <i data-lucide="{{ $client['icon'] }}" class="w-5 h-5 text-primary-foreground"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-foreground">{{ $client['title'] }}</h3>
                        </div>
                        <ul class="space-y-3">
                            @foreach($client['items'] as $item)
                            <li class="flex items-start gap-3 text-sm text-muted-foreground">
                                <i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>
                                {{ $item }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </div>

                {{-- Additional Image Section --}}
                <div class="mt-12 rounded-2xl overflow-hidden shadow-lg h-[300px] md:h-[400px]">
                    <img src="{{ asset('assets/asset5.webp') }}" alt="Примеры стеклянных конструкций" class="w-full h-full object-cover transition-transform duration-700 hover:scale-105">
                </div>
            </div>
        </section>

        <!-- SOLUTIONS GRID -->
        <section class="w-full py-16 md:py-24 bg-[#e8e8ee]">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-3">Решения</span>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-foreground tracking-tight">Наши решения</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                    @foreach($solutions as $sol)
                    <div class="p-6 md:p-8 bg-background rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center mb-5">
                            <i data-lucide="{{ $sol['icon'] }}" class="w-5 h-5 text-primary"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-foreground mb-4">{{ $sol['title'] }}</h3>
                        <ul class="space-y-2">
                            @foreach($sol['items'] as $item)
                            <li class="flex items-center gap-2 text-sm text-muted-foreground">
                                <span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>
                                {{ $item }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- MATERIALS -->
        <section class="w-full py-16 md:py-24 bg-background">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                 <div class="flex flex-col items-center text-center mb-12">
                     <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-3">Материалы</span>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-foreground tracking-tight">Материалы и технологии</h2>
                    <p class="mt-4 text-muted-foreground max-w-2xl mx-auto">Мы используем только сертифицированные и проверенные материалы от ведущих европейских производителей.</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                     <div class="rounded-2xl overflow-hidden shadow-lg h-[300px] lg:h-[400px]">
                        <img src="{{ asset('assets/asset6.webp') }}" alt="Материалы и технологии" class="w-full h-full object-cover transition-transform duration-700 hover:scale-105">
                    </div>
                    <div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4">
                            @foreach($materials as $index => $material)
                            <div class="group flex items-center gap-4 p-4 bg-muted/30 rounded-xl border border-border/50 hover:border-primary/30 hover:shadow-md transition-all duration-300">
                                <div class="w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center shrink-0 transition-colors duration-300">
                                    <span class="text-xs font-bold text-primary transition-colors duration-300">
                                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                    </span>
                                </div>
                                <span class="text-sm font-medium text-foreground text-left">{{ $material }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PROCESS (WORK FORMAT) -->
        <section class="w-full py-16 md:py-24 bg-[#e8e8ee]">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-3">Процесс</span>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-foreground tracking-tight">Формат работы</h2>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($workProcess as $wp)
                    <div class="p-6 bg-background rounded-2xl border border-border/50">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center mb-4">
                            <i data-lucide="{{ $wp['icon'] }}" class="w-5 h-5 text-primary"></i>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-3">{{ $wp['title'] }}</h4>
                        <ul class="space-y-2">
                            @foreach($wp['items'] as $item)
                            <li class="flex items-center gap-2 text-sm text-muted-foreground">
                                <span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>
                                {{ $item }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- PROJECTS (PORTFOLIO) -->
        <section class="w-full py-16 md:py-24 bg-background">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-3">Проекты</span>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-foreground tracking-tight">Реализованные проекты</h2>
                </div>
                
                {{-- Projects Grid --}}
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                    @forelse($projects as $project)
                    <div class="group bg-background rounded-2xl overflow-hidden border border-border/50 transition-all duration-500 hover:shadow-xl hover:border-primary/30 flex flex-col">
                        <a href="{{ route('ru.project.show', $project->slug) }}" class="block relative h-64 overflow-hidden shrink-0">
                            @if($project->cover_image)
                                <img src="{{ Storage::url($project->cover_image) }}" alt="{{ $project->title_ru }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            @else
                                <div class="w-full h-full bg-muted flex items-center justify-center">
                                    <i data-lucide="image" class="w-12 h-12 text-muted-foreground/30"></i>
                                </div>
                            @endif
                            <div class="absolute top-4 left-4 ml-2 px-3 py-1.5 rounded-full bg-primary z-10 w-fit">
                                <span class="text-xs font-medium text-white">{{ $project->tag_1_ru ?? 'Проект' }}</span>
                            </div>
                        </a>
                        <div class="p-6 flex flex-col flex-1">
                            <div class="flex items-center gap-2 flex-wrap mb-4">
                                @if($project->area)
                                    <span class="inline-flex items-center justify-center h-7 px-3 rounded-full text-xs font-bold bg-primary/10 text-primary">{{ $project->area }}</span>
                                @endif
                                @if($project->year)
                                    <span class="inline-flex items-center justify-center h-7 px-3 rounded-full text-xs font-bold bg-primary/10 text-primary">{{ $project->year }}</span>
                                @endif
                            </div>
                            <h4 class="text-lg font-bold text-foreground leading-tight mb-2 group-hover:text-primary transition-colors">
                                <a href="{{ route('ru.project.show', $project->slug) }}">
                                    {{ $project->title_ru }}
                                </a>
                            </h4>
                            <p class="text-sm text-muted-foreground leading-relaxed line-clamp-3">
                                {{ Str::limit(strip_tags($project->content_ru), 120) }}
                            </p>
                        </div>
                    </div>
                    @empty
                        <div class="col-span-full text-center py-12 text-muted-foreground">
                            Проекты не найдены.
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- WHY US -->
        <section class="w-full py-16 md:py-24 bg-[#e8e8ee]">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-3">Почему AluStar</span>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-foreground tracking-tight">Почему выбирают нас</h2>
                </div>
                
                {{-- Row 1: 3 items --}}
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 md:gap-6 mb-4 md:mb-6">
                    @foreach(array_slice($whyUs, 0, 3) as $item)
                    <div class="flex flex-col p-8 bg-background rounded-2xl border border-border/50 hover:border-primary/30 hover:shadow-md transition-all duration-300">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-4 transition-colors duration-300">
                            <i data-lucide="{{ $item['icon'] }}" class="w-5 h-5 text-primary transition-colors duration-300"></i>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-2">{{ $item['title'] }}</h4>
                        <p class="text-sm text-muted-foreground leading-relaxed">{{ $item['desc'] }}</p>
                    </div>
                    @endforeach
                </div>
                
                {{-- Row 2: 3 items --}}
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 md:gap-6">
                    @foreach(array_slice($whyUs, 3) as $item)
                    <div class="flex flex-col p-8 bg-background rounded-2xl border border-border/50 hover:border-primary/30 hover:shadow-md transition-all duration-300">
                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-4 transition-colors duration-300">
                            <i data-lucide="{{ $item['icon'] }}" class="w-5 h-5 text-primary transition-colors duration-300"></i>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-2">{{ $item['title'] }}</h4>
                        <p class="text-sm text-muted-foreground leading-relaxed">{{ $item['desc'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- CTA -->
        @include('partials.ru.cta-section')
    </div>
@endsection
