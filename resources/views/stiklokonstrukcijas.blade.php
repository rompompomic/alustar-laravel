@extends('layouts.app')

@section('title', 'Stikla konstrukcijas - AluStar')
@section('meta_description', 'Piedāvājam alumīnija-stikla konstrukciju projektēšanu, ražošanu un montāžu, nodrošinot augstāko kvalitāti.')

@section('content')
    @php
    $clientTypes = [
        [
            "id" => "developers",
            "icon" => "building-2",
            "title" => "Attīstītājiem",
            "items" => [
                "Fasāžu sistēmas daudzdzīvokļu mājām",
                "Panorāmas stiklojums",
                "Ieejas grupas",
                "Fasādes izmaksu optimizācija",
                "Darbs ģenerāluzņēmuma ietvaros"
            ]
        ],
        [
            "id" => "commercial",
            "icon" => "landmark",
            "title" => "Investoriem un pasūtītājiem",
            "items" => [
                "Biroju ēku stiklojums",
                "Vitrāžu sistēmas",
                "Fasādes tirdzniecības centriem",
                "Ieejas grupas",
                "Stikla starpsienas"
            ]
        ],
        [
            "id" => "private",
            "icon" => "home",
            "title" => "Privātajiem klientiem",
            "items" => [
                "Panorāmas logi",
                "Bīdāmās sistēmas",
                "Terašu konstrukcijas",
                "Ziemas dārzi",
                "Individuālie projekti"
            ]
        ]
    ];

    $solutions = [
        [
            "icon" => "building-2",
            "title" => "Alumīnija fasādes",
            "items" => ["Stāvriģeļu sistēmas", "Strukturālais stiklojums", "Panorāmas fasādes", "Vitrāžu konstrukcijas"]
        ],
        [
            "icon" => "home",
            "title" => "Logi",
            "items" => ["Plastikāta logi", "Alumīnija logi", "Koka-alumīnija sistēmas", "Energoefektīvas stikla paketes"]
        ],
        [
            "icon" => "door-open",
            "title" => "Durvju sistēmas",
            "items" => [
                "Ieejas alumīnija durvis",
                "Ugunsdrošas durvis",
                "Automātiskās durvis",
                "Siltum- un skaņizolācijas risinājumi"
            ]
        ],
        [
            "icon" => "layers",
            "title" => "Stikla starpsienas",
            "items" => ["Biroju sistēmas", "Interjera risinājumi", "Mobilās konstrukcijas"]
        ],
        [
            "icon" => "panel-left-open",
            "title" => "Bīdāmās un panorāmas sistēmas",
            "items" => ["Portāla sistēmas", "Terašu bīdāmās konstrukcijas", "Saliekamās sistēmas"]
        ],
        [
            "icon" => "maximize", 
            "title" => "Bezrāmju stikla konstrukcijas",
            "items" => ["Bezrāmju starpsienas", "Bezrāmju stikla durvis", "Stikla margas", "Stikla balkonu sistēmas"]
        ],
        [
            "icon" => "snowflake",
            "title" => "Individuālas alumīnija konstrukcijas",
            "items" => ["Ziemas dārzi", "Nojumes", "Stikla nožogojumi"]
        ]
    ];

    $materials = [
        "Alumīnija profilu sistēmas",
        "Plastikāta profilu sistēmas",
        "Koks un koka-alumīnijs",
        "Energoefektīvas stikla paketes",
        "Moderna furnitūra",
        "Automatizētas atvēršanas sistēmas",
    ];

    $workProcess = [
        [
            "icon" => "file-text",
            "title" => "Projektēšana",
            "items" => ["Tehnisko risinājumu izstrāde", "Konstruktoru dokumentācija", "Mezglu saskaņošana"]
        ],
        [
            "icon" => "settings",
            "title" => "Ražošana",
            "items" => ["Konstrukciju izgatavošana", "Kvalitātes kontrole", "Sagatavošana montāžai"]
        ],
        [
            "icon" => "wrench",
            "title" => "Montāža",
            "items" => ["Profesionāla uzstādīšana", "Darbs dzīvojamos un komercobjektos", "Termiņu ievērošana"]
        ],
        [
            "icon" => "shield",
            "title" => "Serviss",
            "items" => ["Garantijas apkalpošana", "Regulēšana un apkope"]
        ]
    ];

    $whyUs = [
        ["icon" => "award", "title" => "19+ gadu pieredze", "desc" => "Simtiem realizētu fasāžu un stiklojuma projektu dzīvojamajā un komerciālajā segmentā."],
        ["icon" => "layers", "title" => "Kompleksa pieeja", "desc" => "No projektēšanas līdz montāžai — viss vienā uzņēmumā bez starpnieku ķēdēm."],
        ["icon" => "building-2", "title" => "Ģenerāluzņēmuma formāts", "desc" => "Integrējamies būvniecības procesā un strādājam saskaņā ar kopējo grafiku."],
        ["icon" => "shield", "title" => "Garantija līdz 5 gadiem", "desc" => "Eiropas kvalitātes standarti un sertificēti materiāli ar ilgtermiņa garantiju."],
        ["icon" => "trending-up", "title" => "Caurspīdīga tāme", "desc" => "Detalizēts izmaksu aprēķins bez slēptām pozīcijām — jūs redzat katru centu."],
        ["icon" => "clock", "title" => "Termiņu kontrole", "desc" => "Precīzs darbu grafiks ar nedēļas atskaiti un garantētu termiņu ievērošanu."]
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
                        Stikla konstrukcijas
                    </span>
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-primary-foreground tracking-tight mb-4 max-w-3xl">
                        Stikla konstrukcijas un alumīnija fasāžu sistēmas
                    </h1>
                    <p class="text-base md:text-lg text-primary-foreground/80 mb-2 max-w-2xl">
                        Ražošana, projektēšana un montāža visā Latvijā.
                    </p>
                    <p class="text-sm text-primary-foreground/60 mb-8">
                        Strādājam kā patstāvīgs uzņēmējs un ģenerāluzņēmuma sastāvā.
                    </p>
                    <div class="flex flex-wrap gap-3">
                        <a href="{{ url('/') }}#contact" class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-primary-foreground rounded-lg font-medium hover:bg-primary/90 transition-all">
                            Saņemt aprēķinu <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                        <a href="{{ url('/') }}#contact" class="inline-flex items-center gap-2 px-6 py-3 bg-background text-foreground rounded-lg font-medium hover:bg-muted transition-all">
                            Apspriest projektu
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- CLIENTS (FOR WHOM) -->
        <section class="w-full py-16 md:py-24 bg-background">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-3">Klientiem</span>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-foreground tracking-tight">Kam mēs strādājam</h2>
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
            </div>
        </section>

        <!-- SOLUTIONS GRID -->
        <section class="w-full py-16 md:py-24 bg-[#e8e8ee]">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-3">Risinājumi</span>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-foreground tracking-tight">Mūsu risinājumi</h2>
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
                <div class="text-center mb-12">
                    <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-3">Materiāli</span>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-foreground tracking-tight">Materiāli un tehnoloģijas</h2>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach($materials as $index => $material)
                    <div class="group flex items-center gap-4 p-6 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 hover:shadow-md transition-all duration-300">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0 transition-colors duration-300">
                            <span class="text-sm font-bold text-primary transition-colors duration-300">
                                {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                            </span>
                        </div>
                        <span class="text-sm font-medium text-foreground">{{ $material }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- PROCESS (WORK FORMAT) -->
        <section class="w-full py-16 md:py-24 bg-[#e8e8ee]">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-3">Process</span>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-foreground tracking-tight">Darba formāts</h2>
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
                    <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-3">Projekti</span>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-foreground tracking-tight">Realizētie projekti</h2>
                </div>
                

                {{-- Projects Grid --}}
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                    @forelse($projects as $project)
                    <div class="group bg-background rounded-2xl overflow-hidden border border-border/50 transition-all duration-500 hover:shadow-xl hover:border-primary/30 flex flex-col">
                        <a href="{{ route(App::getLocale() === 'ru' ? 'ru.project.show' : 'project.show', $project->slug) }}" class="block relative h-64 overflow-hidden shrink-0">
                            @if($project->cover_image)
                                <img src="{{ Storage::url($project->cover_image) }}" alt="{{ App::getLocale() === 'ru' ? $project->title_ru : $project->title_lv }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            @else
                                <div class="w-full h-full bg-muted flex items-center justify-center">
                                    <i data-lucide="image" class="w-12 h-12 text-muted-foreground/30"></i>
                                </div>
                            @endif
                            <div class="absolute top-4 left-4 ml-2 px-3 py-1.5 rounded-full bg-primary z-10 w-fit">
                                <span class="text-xs font-medium text-white">{{ App::getLocale() === 'ru' ? ($project->tag_1_ru ?? 'Проект') : ($project->tag_1_lv ?? 'Projekts') }}</span>
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
                                <a href="{{ route(App::getLocale() === 'ru' ? 'ru.project.show' : 'project.show', $project->slug) }}">
                                    {{ App::getLocale() === 'ru' ? $project->title_ru : $project->title_lv }}
                                </a>
                            </h4>
                            <p class="text-sm text-muted-foreground leading-relaxed line-clamp-3">
                                {{ Str::limit(strip_tags(App::getLocale() === 'ru' ? $project->content_ru : $project->content_lv), 120) }}
                            </p>
                        </div>
                    </div>
                    @empty
                        <div class="col-span-full text-center py-12 text-muted-foreground">
                            {{ App::getLocale() === 'ru' ? 'Проекты не найдены.' : 'Projekti nav atrasti.' }}
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- WHY US -->
        <section class="w-full py-16 md:py-24 bg-[#e8e8ee]">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-3">Kāpēc AluStar</span>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-foreground tracking-tight">Kāpēc izvēlēties mūs</h2>
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
        @include('partials.cta-section')
    </div>
@endsection
