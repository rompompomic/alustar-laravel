@extends('layouts.app-ru')

@section('title', 'Cтроительство - Генподряд - AluStar')
@section('meta_description', 'Жилые и коммерческие объекты в Латвии. От концепции до сдачи в эксплуатацию.')

@section('content')
    <div x-data="{ projectFilter: 'all' }">
        {{-- 1. HERO --}}
        <section class="relative w-full h-[500px] md:h-[600px] overflow-hidden">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('assets/hero-buvnieciba.webp') }}')"></div>
            <div class="absolute inset-0 bg-secondary/60"></div>
            <div class="relative h-full flex items-end">
                <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16 w-full pb-16 md:pb-20">
                    <span class="inline-block text-xs font-medium text-primary-foreground/70 uppercase tracking-widest mb-4">Строительство</span>
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-primary-foreground tracking-tight mb-4 max-w-3xl">
                        AluStar  Генподряд и строительство полного цикла
                    </h1>
                    <p class="text-base md:text-lg text-primary-foreground/80 mb-2 max-w-2xl">Жилые и коммерческие объекты в Латвии</p>
                    <p class="text-sm text-primary-foreground/60 mb-8">От концепции до сдачи в эксплуатацию.</p>
                    <div class="flex flex-wrap gap-3">
                        <a href="#contact" class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-primary-foreground rounded-lg font-medium hover:bg-primary/90 transition-all">
                            Обсудить проект <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                        <a href="#contact" class="inline-flex items-center gap-2 px-6 py-3 bg-background text-foreground rounded-lg font-medium hover:bg-muted transition-all">
                            Получить расчет бюджета
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- 2. FOR WHOM --}}
        <section class="w-full py-16 md:py-24 bg-background">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-3">Клиентам</span>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-foreground tracking-tight">Для кого мы работаем</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    {{-- Developers --}}
                    <div class="p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center">
                                <i data-lucide="building-2" class="w-5 h-5 text-primary-foreground"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-foreground">Застройщикам</h3>
                        </div>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>Строительство многоквартирных домов</li>
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>Генподряд под ключ</li>
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>Контроль бюджета и сроков</li>
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>Координация субподрядчиков</li>
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>Поддержка при сдаче в эксплуатацию</li>
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>Гарантийное обслуживание</li>
                        </ul>
                    </div>
                    
                    {{-- Investors --}}
                    <div class="p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center">
                                <i data-lucide="landmark" class="w-5 h-5 text-primary-foreground"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-foreground">Инвесторам</h3>
                        </div>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>Коммерческие и индустриальные объекты</li>
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>Прогнозируемые сроки реализации</li>
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>Строительство для арендатора (build-to-lease)</li>
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>Объекты для дальнейшей продажи</li>
                        </ul>
                    </div>

                    {{-- Private --}}
                    <div class="p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center">
                                <i data-lucide="home" class="w-5 h-5 text-primary-foreground"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-foreground">Частным заказчикам</h3>
                        </div>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>Частные дома</li>
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>Небольшие жилые проекты</li>
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>Прозрачная смета</li>
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>Контроль качества</li>
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>Персональное управление проектом</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        {{-- 3. WHAT WE BUILD --}}
        <section class="w-full py-16 md:py-24 bg-[#e8e8ee]">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-3">Объекты</span>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-foreground tracking-tight">Что мы строим</h2>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                    <div class="group flex items-center gap-4 p-6 bg-background rounded-2xl border border-border/50 transition-all duration-300 hover:border-primary/30 hover:shadow-md">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0 transition-colors">
                            <i data-lucide="building-2" class="w-5 h-5 text-primary transition-colors"></i>
                        </div>
                        <span class="text-sm font-medium text-foreground">Многоквартирные жилые дома</span>
                    </div>
                    <div class="group flex items-center gap-4 p-6 bg-background rounded-2xl border border-border/50 transition-all duration-300 hover:border-primary/30 hover:shadow-md">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0 transition-colors">
                            <i data-lucide="home" class="w-5 h-5 text-primary transition-colors"></i>
                        </div>
                        <span class="text-sm font-medium text-foreground">Частные и рядные дома</span>
                    </div>
                    <div class="group flex items-center gap-4 p-6 bg-background rounded-2xl border border-border/50 transition-all duration-300 hover:border-primary/30 hover:shadow-md">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0 transition-colors">
                            <i data-lucide="landmark" class="w-5 h-5 text-primary transition-colors"></i>
                        </div>
                        <span class="text-sm font-medium text-foreground">Офисные здания</span>
                    </div>
                     <div class="group flex items-center gap-4 p-6 bg-background rounded-2xl border border-border/50 transition-all duration-300 hover:border-primary/30 hover:shadow-md">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0 transition-colors">
                            <i data-lucide="building-2" class="w-5 h-5 text-primary transition-colors"></i>
                        </div>
                        <span class="text-sm font-medium text-foreground">Торговые объекты</span>
                    </div>
                     <div class="group flex items-center gap-4 p-6 bg-background rounded-2xl border border-border/50 transition-all duration-300 hover:border-primary/30 hover:shadow-md">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0 transition-colors">
                            <i data-lucide="hard-hat" class="w-5 h-5 text-primary transition-colors"></i>
                        </div>
                        <span class="text-sm font-medium text-foreground">Склады и производственные здания</span>
                    </div>
                     <div class="group flex items-center gap-4 p-6 bg-background rounded-2xl border border-border/50 transition-all duration-300 hover:border-primary/30 hover:shadow-md">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0 transition-colors">
                            <i data-lucide="wrench" class="w-5 h-5 text-primary transition-colors"></i>
                        </div>
                        <span class="text-sm font-medium text-foreground">Реконструкция и реновация</span>
                    </div>
                </div>
            </div>
        </section>

         {{-- 4. COMPETENCIES --}}
        <section class="w-full py-16 md:py-24 bg-background">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-3">Компетенции</span>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-foreground tracking-tight">Наши компетенции</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                    {{-- Konstruktivs --}}
                    <div class="p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center mb-5">
                            <i data-lucide="hammer" class="w-5 h-5 text-primary"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-foreground mb-4">Конструктив</h3>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Земляные работы</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Фундаменты</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Монолитные работы</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Бетонные конструкции</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Металлоконструкции</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Каркасные решения</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Кровельные работы</li>
                        </ul>
                    </div>

                     {{-- Inzeniersistemas --}}
                    <div class="p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center mb-5">
                            <i data-lucide="settings" class="w-5 h-5 text-primary"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-foreground mb-4">Инженерные системы</h3>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Внутренние инженерные сети</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Наружные инженерные сети</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Отопление</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Вентиляция</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Электроснабжение</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Водоснабжение и канализация</li>
                        </ul>
                    </div>

                     {{-- Fasades --}}
                    <div class="p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center mb-5">
                            <i data-lucide="layers" class="w-5 h-5 text-primary"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-foreground mb-4">Фасады и ограждающие конструкции</h3>
                        <ul class="space-y-2 mb-8">
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Алюминиевые фасады</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Стеклоконструкции</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Панорамное остекление</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Окна</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Входные и внутренние двери</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Противопожарные двери</li>
                             <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Витражные системы</li>
                        </ul>
                        <p class="mt-4 text-xs text-muted-foreground/70 italic border-t border-border/50 pt-3">Отдельное направление Стеклоконструкции существует как самостоятельный раздел, так и часть комплексного строительства.</p>
                    </div>

                     {{-- Areja infrastruktura --}}
                    <div class="p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center mb-5">
                            <i data-lucide="fence" class="w-5 h-5 text-primary"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-foreground mb-4">Внешняя инфраструктура</h3>
                        <ul class="space-y-2">
                             <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Ворота</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Заборы</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Подъездные пути</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Благоустройство территории</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Парковки</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Внешнее освещение</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

         {{-- 5. WORK FORMAT --}}
        <section class="w-full py-16 md:py-24 bg-[#e8e8ee]">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-3">Формат</span>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-foreground tracking-tight">Формат работы</h2>
                </div>
                {{-- Top row: 3 items --}}
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 md:gap-6 mb-4 md:mb-6">
                    <div class="group p-6 md:p-8 bg-background rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-5 -mt-2 transition-colors">
                            <i data-lucide="briefcase" class="w-6 h-6 text-primary transition-colors"></i>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-2">Генподряд</h4>
                        <p class="text-sm text-muted-foreground leading-relaxed">Полная ответственность за проект  от проектирования до сдачи в эксплуатацию</p>
                    </div>
                    <div class="group p-6 md:p-8 bg-background rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-5 -mt-2 transition-colors">
                            <i data-lucide="pencil-ruler" class="w-6 h-6 text-primary transition-colors"></i>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-2">Design & Build</h4>
                        <p class="text-sm text-muted-foreground leading-relaxed">Интегрированное проектирование и строительство в единой команде</p>
                    </div>
                     <div class="group p-6 md:p-8 bg-background rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-5 -mt-2 transition-colors">
                            <i data-lucide="clipboard-list" class="w-6 h-6 text-primary transition-colors"></i>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-2">Строительство по проекту заказчика</h4>
                        <p class="text-sm text-muted-foreground leading-relaxed">Реализация по готовому проекту с контролем бюджета</p>
                    </div>
                </div>
                 {{-- Bottom row: 2 items centered --}}
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 md:gap-6 max-w-full lg:max-w-[66%] mx-auto">
                    <div class="group p-6 md:p-8 bg-background rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-5 -mt-2 transition-colors">
                            <i data-lucide="puzzle" class="w-6 h-6 text-primary transition-colors"></i>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-2">Частичные строительные работы</h4>
                        <p class="text-sm text-muted-foreground leading-relaxed">Отдельные этапы работ и специализированные решения</p>
                    </div>
                    <div class="group p-6 md:p-8 bg-background rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-5 -mt-2 transition-colors">
                            <i data-lucide="key-round" class="w-6 h-6 text-primary transition-colors"></i>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-2">Комплексные решения под ключ</h4>
                        <p class="text-sm text-muted-foreground leading-relaxed">От концепции до сдачи  полный цикл</p>
                    </div>
                </div>
            </div>
        </section>

         {{-- 6. STAGES --}}
        <section class="w-full py-16 md:py-24 bg-background">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-3">Процесс</span>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-foreground tracking-tight">Этапы реализации проекта</h2>
                </div>
                {{-- Top row: 4 --}}
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 md:gap-6 mb-4 md:mb-6">
                    <div class="group relative p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-2xl font-bold text-primary/30">01</span>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-1">Первичная консультация</h4>
                        <p class="text-sm text-muted-foreground">Анализ задачи</p>
                    </div>
                    <div class="group relative p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-2xl font-bold text-primary/30">02</span>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-1">Расчет бюджета</h4>
                        <p class="text-sm text-muted-foreground">Предварительная смета</p>
                    </div>
                     <div class="group relative p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-2xl font-bold text-primary/30">03</span>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-1">Подготовка договора</h4>
                        <p class="text-sm text-muted-foreground">Юридическое оформление</p>
                    </div>
                     <div class="group relative p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-2xl font-bold text-primary/30">04</span>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-1">Проектирование</h4>
                        <p class="text-sm text-muted-foreground">Согласование и документация</p>
                    </div>
                </div>
                 {{-- Bottom row: 3 centered --}}
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 md:gap-6 max-w-full lg:max-w-[75%] mx-auto">
                    <div class="group relative p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-2xl font-bold text-primary/30">05</span>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-1">Строительство</h4>
                        <p class="text-sm text-muted-foreground">Реализация объекта</p>
                    </div>
                    <div class="group relative p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-2xl font-bold text-primary/30">06</span>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-1">Сдача в эксплуатацию</h4>
                        <p class="text-sm text-muted-foreground">Процесс приемки</p>
                    </div>
                    <div class="group relative p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-2xl font-bold text-primary/30">07</span>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-1">Гарантия</h4>
                        <p class="text-sm text-muted-foreground">Гарантийное обслуживание</p>
                    </div>
                </div>
            </div>
        </section>

         {{-- 7. PROJECTS --}}
        <section class="w-full py-16 md:py-24 bg-[#e8e8ee]">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-3">Портфолио</span>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-foreground tracking-tight">Реализованные проекты</h2>
                </div>

                {{-- Filters removed for UI requirements --}}

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

         {{-- 8. WHY ALUSTAR --}}
        <section class="w-full py-16 md:py-24 bg-background">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-3">Почему AluStar</span>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-foreground tracking-tight">Почему AluStar</h2>
                </div>
                 {{-- Top row: 3 --}}
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 md:gap-6 mb-4 md:mb-6">
                    <div class="group flex flex-col items-center text-center p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-5 transition-colors">
                            <i data-lucide="award" class="w-6 h-6 text-primary transition-colors"></i>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-2">15+ лет опыта</h4>
                        <p class="text-sm text-muted-foreground leading-relaxed">Реализация сложных объектов  от многоквартирных домов до индустриальных комплексов со строгими требованиями</p>
                    </div>
                    <div class="group flex flex-col items-center text-center p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-5 transition-colors">
                            <i data-lucide="layers" class="w-6 h-6 text-primary transition-colors"></i>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-2">Все под одной крышей</h4>
                        <p class="text-sm text-muted-foreground leading-relaxed">Конструктив, инженерные системы, фасады и внешняя инфраструктура  без цепочек посредников</p>
                    </div>
                     <div class="group flex flex-col items-center text-center p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-5 transition-colors">
                            <i data-lucide="shield" class="w-6 h-6 text-primary transition-colors"></i>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-2">Компетенция в стеклоконструкциях</h4>
                        <p class="text-sm text-muted-foreground leading-relaxed">Собственное производство алюминия и стекла  более быстрая реакция, низкие затраты, высокое качество</p>
                    </div>
                </div>
                {{-- Bottom row: 2 centered --}}
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 md:gap-6 max-w-full lg:max-w-[66%] mx-auto">
                    <div class="group flex flex-col items-center text-center p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-5 transition-colors">
                            <i data-lucide="trending-up" class="w-6 h-6 text-primary transition-colors"></i>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-2">Бюджет и сроки</h4>
                        <p class="text-sm text-muted-foreground leading-relaxed">Еженедельные отчеты, фиксированные сметы, штрафы за задержки  мы берем риск на себя</p>
                    </div>
                     <div class="group flex flex-col items-center text-center p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-5 transition-colors">
                            <i data-lucide="file-text" class="w-6 h-6 text-primary transition-colors"></i>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-2">Гарантия до 5 лет</h4>
                        <p class="text-sm text-muted-foreground leading-relaxed">Полное гарантийное обслуживание после сдачи  с документированным распределением ответственности</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- 9. CTA --}}
        @include('partials.ru.cta-section')
    </div>
@endsection
