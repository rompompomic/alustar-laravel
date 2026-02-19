@extends('layouts.app-ru')

@section('title', 'Реновация - AluStar')
@section('meta_description', 'Предлагаем услуги реновации зданий: утепление стен, подвалов и крыш, замена инженерных сетей, обеспечивая качественный результат.')

@section('content')
    <div>
        {{-- 1. HERO --}}
        <section class="relative w-full h-[500px] md:h-[600px] overflow-hidden">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('assets/asset1.webp') }}')"></div>
            <div class="absolute inset-0" style="background-color: rgba(0, 0, 0, 0.7);"></div>
            <div class="relative h-full flex items-end">
                <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16 w-full pb-16 md:pb-20">
                    <span class="inline-block text-xs font-medium text-primary-foreground/70 uppercase tracking-widest mb-4">Услуги</span>
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-primary-foreground tracking-tight mb-4 max-w-3xl">
                        Реновация
                    </h1>
                    <p class="text-base md:text-lg text-primary-foreground/80 mb-2 max-w-2xl">
                        Реновация продлевает срок эксплуатации здания, таким образом предотвращая аварийные ситуации в будущем.
                    </p>
                    <div class="flex flex-wrap gap-3 mt-8">
                        <a href="#contact" class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-primary-foreground rounded-lg font-medium hover:bg-primary/90 transition-all">
                            Заказать проект <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- 2. DESCRIPTION --}}
        <section class="w-full py-16 md:py-24 bg-muted/20">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <h2 class="text-2xl md:text-3xl font-bold text-foreground mb-6">Почему реновация важна?</h2>
                        <p class="text-muted-foreground mb-4">
                            Наши высококвалифицированные специалисты определят, какой именно тип реновации необходим для Вашего дома.
                            Чтобы работа была качественной, нужно соблюдать последовательность действий – это крайне важно.
                        </p>
                        <p class="text-muted-foreground">
                            Реновация не только улучшает внешний вид здания, но и существенно повышает его энергоэффективность,
                            снижая расходы на отопление и улучшая качество жизни жильцов.
                        </p>
                    </div>
                    <div class="bg-muted/30 p-8 rounded-2xl border border-border/50">
                        <h3 class="text-xl font-semibold text-foreground mb-6">Реновация происходит в следующем порядке:</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center shrink-0 mt-0.5">
                                    <i data-lucide="check" class="w-4 h-4 text-primary"></i>
                                </div>
                                <span class="text-foreground/80">Утепление стен</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center shrink-0 mt-0.5">
                                    <i data-lucide="check" class="w-4 h-4 text-primary"></i>
                                </div>
                                <span class="text-foreground/80">Утепление подвалов</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center shrink-0 mt-0.5">
                                    <i data-lucide="check" class="w-4 h-4 text-primary"></i>
                                </div>
                                <span class="text-foreground/80">Утепление крыш и чердаков</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center shrink-0 mt-0.5">
                                    <i data-lucide="check" class="w-4 h-4 text-primary"></i>
                                </div>
                                <span class="text-foreground/80">Замена окон</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center shrink-0 mt-0.5">
                                    <i data-lucide="check" class="w-4 h-4 text-primary"></i>
                                </div>
                                <span class="text-foreground/80">Системы отопления</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center shrink-0 mt-0.5">
                                    <i data-lucide="check" class="w-4 h-4 text-primary"></i>
                                </div>
                                <span class="text-foreground/80">Системы водоснабжения</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center shrink-0 mt-0.5">
                                    <i data-lucide="check" class="w-4 h-4 text-primary"></i>
                                </div>
                                <span class="text-foreground/80">Системы вентиляции</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        {{-- 3. PROCESS --}}
        <section class="w-full py-16 bg-[#E8E8EE]">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <h2 class="text-2xl md:text-3xl font-bold text-foreground">Процесс Работы</h2>
                    <p class="text-muted-foreground mt-4 max-w-2xl mx-auto">Мы обеспечиваем полный цикл реновации от аудита до сдачи под ключ.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="bg-background p-6 rounded-xl border border-border/50 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-4">
                            <span class="text-xl font-bold text-primary">1</span>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Энергоаудит</h3>
                        <p class="text-sm text-muted-foreground">Оценка состояния здания и определение необходимых работ.</p>
                    </div>
                    <div class="bg-background p-6 rounded-xl border border-border/50 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-4">
                            <span class="text-xl font-bold text-primary">2</span>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Технический проект</h3>
                        <p class="text-sm text-muted-foreground">Разработка проекта и согласование с ответственными учреждениями.</p>
                    </div>
                    <div class="bg-background p-6 rounded-xl border border-border/50 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-4">
                            <span class="text-xl font-bold text-primary">3</span>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Строительство</h3>
                        <p class="text-sm text-muted-foreground">Качественное выполнение строительных работ и авторский надзор.</p>
                    </div>
                    <div class="bg-background p-6 rounded-xl border border-border/50 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-4">
                            <span class="text-xl font-bold text-primary">4</span>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Сдача в эксплуатацию</h3>
                        <p class="text-sm text-muted-foreground">Сдача объекта заказчику и гарантийное обслуживание.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- 4. ADVANTAGES --}}
        <section class="w-full py-16 md:py-24 bg-muted/20">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-16">
                    <h2 class="text-2xl md:text-3xl font-bold text-foreground">Преимущества Реновации</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="flex flex-col items-center text-center p-6">
                        <div class="w-16 h-16 rounded-xl bg-primary/10 flex items-center justify-center mb-6 shrink-0">
                            <i data-lucide="zap" class="w-8 h-8 text-primary"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Энергоэффективность</h3>
                        <p class="text-muted-foreground">Уменьшите счета за отопление и улучшите класс энергоэффективности здания.</p>
                    </div>
                    <div class="flex flex-col items-center text-center p-6">
                        <div class="w-16 h-16 rounded-xl bg-primary/10 flex items-center justify-center mb-6 shrink-0">
                            <i data-lucide="trending-up" class="w-8 h-8 text-primary"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Стоимость недвижимости</h3>
                        <p class="text-muted-foreground">Рыночная стоимость реновированного здания значительно возрастает.</p>
                    </div>
                    <div class="flex flex-col items-center text-center p-6">
                        <div class="w-16 h-16 rounded-xl bg-primary/10 flex items-center justify-center mb-6 shrink-0">
                            <i data-lucide="smile" class="w-8 h-8 text-primary"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Качество жизни</h3>
                        <p class="text-muted-foreground">Улучшенный микроклимат и эстетический вид.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- 5. REALIZED PROJECTS --}}
        <section class="w-full py-16 bg-[#E8E8EE]">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <h2 class="text-2xl md:text-3xl font-bold text-foreground">Реализованные Проекты</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="group relative overflow-hidden rounded-xl shadow-lg">
                        <div class="relative aspect-[4/3]">
                            <img src="{{ asset('assets/doposle1.webp') }}" alt="Реновация До и После 1" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end p-6">
                                <span class="text-white font-semibold text-lg">До и После</span>
                            </div>
                        </div>
                    </div>
                    <div class="group relative overflow-hidden rounded-xl shadow-lg">
                        <div class="relative aspect-[4/3]">
                            <img src="{{ asset('assets/doposle2.webp') }}" alt="Реновация До и После 2" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end p-6">
                                <span class="text-white font-semibold text-lg">До и После</span>
                            </div>
                        </div>
                    </div>
                    <div class="group relative overflow-hidden rounded-xl shadow-lg">
                        <div class="relative aspect-[4/3]">
                            <img src="{{ asset('assets/doposle3.webp') }}" alt="Реновация До и После 3" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end p-6">
                                <span class="text-white font-semibold text-lg">До и После</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('partials.ru.cta-section')
    </div>
@endsection
