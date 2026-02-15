@extends('layouts.app')

@section('title', 'Par mums - AluStar')
@section('meta_description', 'Par AluStar: pieredze, komanda, vērtības un sadarbība.')

@section('content')
    @php
    $facts = [
        ["value" => "2007", "label" => "Dibināšanas gads"],
        ["value" => "17+", "label" => "Gadu pieredze"],
        ["value" => "EU", "label" => "Eiropas standarti"],
        ["value" => "100%", "label" => "Pilna atbildība"]
    ];

    $values = [
        [
            "icon" => "building-2",
            "title" => "Profesionalitāte",
            "description" => "Daudzu gadu laikā esam kļuvuši par profesionāļiem savā nozarē ar izcilu reputāciju."
        ],
        [
            "icon" => "users",
            "title" => "Komanda",
            "description" => "Izcils profesionālās komandas darbs ir mūsu panākumu pamatā."
        ],
        [
            "icon" => "handshake",
            "title" => "Sadarbība",
            "description" => "Prasmīga sadarbība ar piegādātājiem un patērētājiem nodrošina augstu kvalitāti."
        ],
        [
            "icon" => "award",
            "title" => "Attīstība",
            "description" => "Nepārtraukti apgūstam jaunākās tehnoloģijas un apmācām personālu."
        ]
    ];
    @endphp

    <!-- Hero Section -->
    <section class="w-full py-[50px] bg-gradient-to-b from-background to-muted/30">
        <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div class="space-y-6">
                    <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-2">
                        Par mums
                    </span>
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-foreground tracking-tight">
                        Jūsu komforts un mājīgums — mūsu mērķis
                    </h1>
                    <p class="text-base md:text-lg text-muted-foreground leading-relaxed">
                        Kompānija AluStar ir dibināta 2007. gadā un specializējas plaša spektra būvniecības pakalpojumu
                        sniegšanā.
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
                        Nekad neapstājamies
                    </h2>

                    <!-- Quote Block -->
                    <div class="relative pl-6 border-l-4 border-primary">
                        <p class="text-lg md:text-xl font-medium text-foreground leading-relaxed">
                            Grūtības? Tas ir aicinājums un stimuls kļūt vēl labākiem; uzlādē ar enerģiju un neļauj apstāties!
                        </p>
                    </div>
                </div>

                <!-- Right Column - Text Content -->
                <div class="space-y-6 lg:pt-2">
                    <p class="text-base md:text-lg text-muted-foreground leading-relaxed">
                        Mēs nekad neapstājamies tieksmē piedāvāt klientiem vislabākos pakalpojumus, un vienmēr esam jaunu
                        risinājumu meklējumos, lai pārsteigtu, padarītu cilvēku dzīvi vienkāršāku un komfortablāku.
                    </p>
                    <p class="text-base md:text-lg text-muted-foreground leading-relaxed">
                        Daudzu gadu laikā mēs esam kļuvuši par profesionāļiem savā darbības nozarē. Laba reputācija ir
                        kompānijas ilggadējās pieredzes rezultāts, ko, neapšaubāmi, palīdzēja sasniegt izcils profesionālās
                        komandas darbs.
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
                    Kas mūs padara īpašus
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
                    Prasmīga sadarbība un mērķtiecība
                </h2>
            </div>

            <!-- Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">
                <!-- Main Text Column -->
                <div class="lg:col-span-2 space-y-6">
                    <p class="text-base md:text-lg text-secondary-foreground/80 leading-relaxed">
                        No svara ir arī prasmīga sadarbība ar piegādātājiem un patērētājiem, mērķtiecība un nelokāmība pat
                        krīzes situācijās.
                    </p>
                    <p class="text-base md:text-lg text-secondary-foreground/80 leading-relaxed">
                        Mēs turpinām apgūt jaunākās dažāda tipa, pielietojuma mērķu un sarežģītības līmeņa stikloto konstrukciju
                        montāžas un ražošanas tehnoloģijas, apmācām personālu un lepojamies ar sasniegtiem rezultātiem.
                    </p>
                </div>

                <!-- Highlight Card -->
                <div class="lg:row-span-2">
                    <div class="h-full p-8 bg-primary text-primary-foreground rounded-xl flex flex-col justify-between">
                        <div>
                            <p class="text-sm font-medium uppercase tracking-wider opacity-80 mb-4">Partnerība</p>
                            <p class="text-xl md:text-2xl font-semibold leading-snug">
                                TepoStone ekskluzīvs pārstāvis Baltijas valstīs
                            </p>
                        </div>
                        <p class="text-sm opacity-70 mt-6">
                            Kompānija AluStar ir produkcijas TepoStone ekskluzīvs pārstāvis Baltijas valstu teritorijā.
                        </p>
                    </div>
                </div>

                <!-- Quote Block -->
                <div class="lg:col-span-2">
                    <div class="p-8 border-primary/30 rounded-xl border-0 px-0 py-0">
                        <p class="text-lg md:text-xl font-medium text-secondary-foreground leading-relaxed">
                            "Mums tie ir uzdevumi, bet jebkuru uzdevumu var un vajag atrisināt."
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
                    Sazināties ar mums
                </h2>
                <p class="text-base md:text-lg text-muted-foreground mb-8">
                    Esam gatavi apspriest jūsu projektu un piedāvāt labākos risinājumus.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ url('/') }}#contact" class="inline-flex items-center justify-center px-8 py-3 bg-primary text-primary-foreground font-medium rounded-lg hover:opacity-90 transition-opacity">
                        Sazināties
                    </a>
                    <a href="tel:+37129265665" class="inline-flex items-center justify-center px-8 py-3 bg-transparent border border-primary text-primary font-medium rounded-lg hover:bg-primary hover:text-primary-foreground transition-all">
                        Zvanīt
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
