@extends('layouts.app-ru')

@section('title', 'О нас - AluStar')
@section('meta_description', 'Узнайте больше о AluStar: наш опыт, команда, ценности и успешное сотрудничество.')

@section('content')
    @php
    $facts = [
        ["value" => "2007", "label" => "Год основания"],
        ["value" => "19+", "label" => "Лет опыта"],
        ["value" => "EU", "label" => "Европейские стандарты"],
        ["value" => "100%", "label" => "Полная ответственность"]
    ];

    $values = [
        [
            "icon" => "building-2",
            "title" => "Профессионализм",
            "description" => "За многие годы мы стали профессионалами в своей отрасли с отличной репутацией."
        ],
        [
            "icon" => "users",
            "title" => "Команда",
            "description" => "Отличная работа профессиональной команды — основа нашего успеха."
        ],
        [
            "icon" => "handshake",
            "title" => "Сотрудничество",
            "description" => "Умелое сотрудничество с поставщиками и потребителями обеспечивает высокое качество."
        ],
        [
            "icon" => "award",
            "title" => "Развитие",
            "description" => "Мы постоянно осваиваем новейшие технологии и обучаем персонал."
        ]
    ];
    @endphp

    <!-- Hero Section -->
    <section class="w-full py-[50px] bg-gradient-to-b from-background to-muted/30">
        <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div class="space-y-6">
                    <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-2">
                        О нас
                    </span>
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-foreground tracking-tight">
                        Ваш комфорт и уют — наша цель
                    </h1>
                    <p class="text-base md:text-lg text-muted-foreground leading-relaxed">
                        Компания AluStar основана в 2007 году и специализируется на предоставлении широкого спектра строительных услуг.
                    </p>
                </div>

                <!-- Facts Grid -->
                <div class="grid grid-cols-2 gap-4">
                    @foreach($facts as $fact)
                    <div class="flex flex-col items-center justify-center p-6 bg-background rounded-xl border border-primary/20 transition-all duration-300 hover:shadow-lg hover:border-primary/40 min-h-[120px] text-center">
                        <span class="text-3xl md:text-4xl font-semibold text-primary mb-2">{{ $fact['value'] }}</span>
                        <span class="text-sm text-muted-foreground">{{ $fact['label'] }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="w-full py-16 md:py-24 bg-[#e8e8ee]">
        <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-start">
                <!-- Left Column - Heading & Quote -->
                <div class="space-y-8">
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-foreground tracking-tight">
                        Никогда не останавливаемся
                    </h2>

                    <!-- Quote Block -->
                    <div class="relative pl-6 border-l-4 border-primary">
                        <p class="text-lg md:text-xl font-medium text-foreground leading-relaxed">
                            Трудности? Это вызов и стимул стать еще лучше; они заряжают энергией и не позволяют останавливаться!
                        </p>
                    </div>
                </div>

                <!-- Right Column - Text Content -->
                <div class="space-y-6 lg:pt-2">
                    <p class="text-base md:text-lg text-muted-foreground leading-relaxed">
                        Мы никогда не останавливаемся в стремлении предложить клиентам лучшие услуги, и всегда находимся в поиске новых
                        решений, чтобы удивлять, делать жизнь людей проще и комфортнее.
                    </p>
                    <p class="text-base md:text-lg text-muted-foreground leading-relaxed">
                        За многие годы мы стали профессионалами в своей отрасли. Хорошая репутация — это
                        результат многолетнего опыта компании, который, несомненно, помогла достичь отличная работа профессиональной
                        команды.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="w-full py-16 md:py-24 bg-background">
        <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
            <div class="text-center mb-12 md:mb-16">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-foreground tracking-tight">
                    Что делает нас особенными
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($values as $val)
                <div class="group p-6 bg-background border border-primary/20 rounded-xl transition-all duration-300 hover:shadow-lg hover:border-primary/40">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors">
                        <i data-lucide="{{ $val['icon'] }}" class="w-6 h-6 text-primary"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-foreground mb-2">{{ $val['title'] }}</h3>
                    <p class="text-sm text-muted-foreground leading-relaxed">{{ $val['description'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section class="w-full py-16 md:py-24 bg-secondary text-secondary-foreground">
        <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
            <!-- Section Header -->
            <div class="mb-12 md:mb-16 text-center">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold tracking-tight">
                    Умелое сотрудничество и целеустремленность
                </h2>
            </div>

            <!-- Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">
                <!-- Main Text Column -->
                <div class="lg:col-span-2 space-y-6">
                    <p class="text-base md:text-lg text-secondary-foreground/80 leading-relaxed">
                        Важны также умелое сотрудничество с поставщиками и потребителями, целеустремленность и стойкость даже в
                        кризисных ситуациях.
                    </p>
                    <p class="text-base md:text-lg text-secondary-foreground/80 leading-relaxed">
                        Мы продолжаем осваивать новейшие технологии монтажа и производства остекленных конструкций различных типов,
                        назначений и уровней сложности, обучаем персонал и гордимся достигнутыми результатами.
                    </p>
                </div>

                <!-- Highlight Card -->
                <div class="lg:row-span-2">
                    <div class="h-full p-8 bg-primary text-primary-foreground rounded-xl flex flex-col justify-between">
                        <div>
                            <p class="text-sm font-medium uppercase tracking-wider opacity-80 mb-4">Партнерство</p>
                            <p class="text-xl md:text-2xl font-semibold leading-snug">
                                Эксклюзивный представитель TepoStone в странах Балтии
                            </p>
                        </div>
                        <p class="text-sm opacity-70 mt-6">
                            Компания AluStar является эксклюзивным представителем продукции TepoStone на территории стран Балтии.
                        </p>
                    </div>
                </div>

                <!-- Quote Block -->
                <div class="lg:col-span-2">
                    <div class="p-8 border-primary/30 rounded-xl border-0 px-0 py-0">
                        <p class="text-lg md:text-xl font-medium text-secondary-foreground leading-relaxed">
                            "Для нас это задачи, а любую задачу можно и нужно решить."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="w-full py-16 md:py-24 bg-[#e8e8ee]">
        <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
            <div class="text-center max-w-3xl mx-auto">
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-foreground tracking-tight mb-6">
                    Связаться с нами
                </h2>
                <p class="text-base md:text-lg text-muted-foreground mb-8">
                    Мы готовы обсудить ваш проект и предложить лучшие решения.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ url('/') }}#contact" class="inline-flex items-center justify-center px-8 py-3 bg-primary text-primary-foreground font-medium rounded-lg hover:opacity-90 transition-opacity">
                        Связаться
                    </a>
                    <a href="tel:+37129265665" class="inline-flex items-center justify-center px-8 py-3 bg-transparent border border-primary text-primary font-medium rounded-lg hover:bg-primary hover:text-primary-foreground transition-all">
                        Позвонить
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
