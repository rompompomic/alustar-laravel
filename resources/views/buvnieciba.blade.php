@extends('layouts.app')

@section('title', 'Būvniecība - AluStar')
@section('meta_description', 'Piedāvājam pilna cikla būvniecības un ģenerāluzņēmēja pakalpojumus dzīvojamiem un komerciāliem objektiem Latvijā no koncepcijas līdz nodošanai ekspluatācijā.')

@section('content')
    <div x-data="{ projectFilter: 'all' }">
        {{-- 1. HERO --}}
        <section class="relative w-full h-[500px] md:h-[600px] overflow-hidden">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('assets/hero-buvnieciba.webp') }}')"></div>
            <div class="absolute inset-0" style="background-color: rgba(0, 0, 0, 0.7);"></div>
            <div class="relative h-full flex items-end">
                <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16 w-full pb-16 md:pb-20">
                    <span class="inline-block text-xs font-medium text-primary-foreground/70 uppercase tracking-widest mb-4">Būvniecība</span>
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-primary-foreground tracking-tight mb-4 max-w-3xl">
                        AluStar Ģenerāluzņēmējs un pilna cikla būvniecība
                    </h1>
                    <p class="text-base md:text-lg text-primary-foreground/80 mb-2 max-w-2xl">Dzīvojamie un komerciālie objekti Latvijā</p>
                    <p class="text-sm text-primary-foreground/60 mb-8">No koncepcijas līdz nodošanai ekspluatācijā.</p>
                     <div class="flex flex-wrap gap-3">
                        <a href="#contact" class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-primary-foreground rounded-lg font-medium hover:bg-primary/90 transition-all">
                            Apspriest projektu <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                        <a href="{{ route('renovacija') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-white text-black rounded-lg font-medium hover:bg-gray-100 transition-all">
                            Skatīt renovācijas projektus
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- 2. FOR WHOM --}}
        <section class="w-full py-16 md:py-24 bg-background">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-3">Klientiem</span>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-foreground tracking-tight">Kam mēs strādājam</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    {{-- Developers --}}
                    <div class="p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md group">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center">
                                <i data-lucide="building-2" class="w-5 h-5 text-primary-foreground"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-foreground">Attīstītājiem</h3>
                        </div>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>Daudzdzīvokļu ēku būvniecība</li>
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>Ģenerāluzņēmējs</li>
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>Budžeta un termiņu kontrole</li>
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>Apakšuzņēmēju koordinācija</li>
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>Atbalsts nodošanā ekspluatācijā</li>
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>Garantijas apkalpošana</li>
                        </ul>
                    </div>
                    
                    {{-- Investors --}}
                    <div class="p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center">
                                <i data-lucide="landmark" class="w-5 h-5 text-primary-foreground"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-foreground">Investoriem</h3>
                        </div>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>Komerciālie un industriālie objekti</li>
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>Prognozējami realizācijas termiņi</li>
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>Būvniecība nomniekam (build-to-lease)</li>
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>Objekti tālākai pārdošanai</li>
                        </ul>
                    </div>

                    {{-- Private --}}
                    <div class="p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center">
                                <i data-lucide="home" class="w-5 h-5 text-primary-foreground"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-foreground">Privātajiem pasūtītājiem</h3>
                        </div>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>Privātmājas</li>
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>Nelieli dzīvojamie projekti</li>
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>Caurspīdīga tāme</li>
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>Kvalitātes kontrole</li>
                            <li class="flex items-start gap-3 text-sm text-muted-foreground"><i data-lucide="check-circle-2" class="w-4 h-4 text-primary mt-0.5 shrink-0"></i>Personīga projektu vadība</li>
                        </ul>
                    </div>
                </div>

                {{-- Image below cards --}}
                <div class="mt-8 rounded-2xl overflow-hidden shadow-lg h-[300px] md:h-[400px]">
                    <img src="{{ asset('assets/asset4.webp') }}" alt="Būvniecības process" class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                </div>
            </div>
        </section>

        {{-- 3. WHAT WE BUILD --}}
        <section class="w-full py-16 md:py-24 bg-[#e8e8ee]">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-3">Objekti</span>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-foreground tracking-tight">Ko mēs būvējam</h2>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                    <div class="group flex items-center gap-4 p-6 bg-background rounded-2xl border border-border/50 transition-all duration-300 hover:border-primary/30 hover:shadow-md">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0 transition-colors">
                            <i data-lucide="building-2" class="w-5 h-5 text-primary transition-colors"></i>
                        </div>
                        <span class="text-sm font-medium text-foreground">Daudzdzīvokļu dzīvojamās mājas</span>
                    </div>
                    <div class="group flex items-center gap-4 p-6 bg-background rounded-2xl border border-border/50 transition-all duration-300 hover:border-primary/30 hover:shadow-md">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0 transition-colors">
                            <i data-lucide="home" class="w-5 h-5 text-primary transition-colors"></i>
                        </div>
                        <span class="text-sm font-medium text-foreground">Privātmājas un rindu mājas</span>
                    </div>
                    <div class="group flex items-center gap-4 p-6 bg-background rounded-2xl border border-border/50 transition-all duration-300 hover:border-primary/30 hover:shadow-md">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0 transition-colors">
                            <i data-lucide="landmark" class="w-5 h-5 text-primary transition-colors"></i>
                        </div>
                        <span class="text-sm font-medium text-foreground">Biroju ēkas</span>
                    </div>
                     <div class="group flex items-center gap-4 p-6 bg-background rounded-2xl border border-border/50 transition-all duration-300 hover:border-primary/30 hover:shadow-md">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0 transition-colors">
                            <i data-lucide="building-2" class="w-5 h-5 text-primary transition-colors"></i>
                        </div>
                        <span class="text-sm font-medium text-foreground">Tirdzniecības objekti</span>
                    </div>
                     <div class="group flex items-center gap-4 p-6 bg-background rounded-2xl border border-border/50 transition-all duration-300 hover:border-primary/30 hover:shadow-md">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0 transition-colors">
                            <i data-lucide="hard-hat" class="w-5 h-5 text-primary transition-colors"></i>
                        </div>
                        <span class="text-sm font-medium text-foreground">Noliktavas un ražošanas ēkas</span>
                    </div>
                     <div class="group flex items-center gap-4 p-6 bg-background rounded-2xl border border-border/50 transition-all duration-300 hover:border-primary/30 hover:shadow-md">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0 transition-colors">
                            <i data-lucide="wrench" class="w-5 h-5 text-primary transition-colors"></i>
                        </div>
                        <span class="text-sm font-medium text-foreground">Rekonstrukcija un renovācija</span>
                    </div>
                </div>
            </div>
        </section>

         {{-- 4. COMPETENCIES --}}
        <section class="w-full py-16 md:py-24 bg-background">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-3">Kompetences</span>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-foreground tracking-tight">Mūsu kompetences</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                    {{-- Konstruktivs --}}
                    <div class="p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center mb-5">
                            <i data-lucide="hammer" class="w-5 h-5 text-primary"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-foreground mb-4">Konstruktīvie darbi</h3>
                        <ul class="space-y-2">
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Zemes darbi</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Pamati</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Monolītie darbi</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Betona konstrukcijas</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Metālkonstrukcijas</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Karkasa risinājumi</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Jumta darbi</li>
                        </ul>
                    </div>
                    
                     {{-- Inzeniersistemas --}}
                    <div class="p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center mb-5">
                            <i data-lucide="settings" class="w-5 h-5 text-primary"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-foreground mb-4">Inženiersistēmas</h3>
                        <div class="space-y-4">
                            <ul class="space-y-2">
                                <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Iekšējie inženiertīkli</li>
                                <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Ārējie inženiertīkli</li>
                                <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Apkure</li>
                                <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Ventilācija</li>
                                <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Elektroapgāde</li>
                                <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Ūdensapgāde un kanalizācija</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                {{-- Decorative Image Row --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8 mt-8">
                     <div class="rounded-2xl overflow-hidden h-[250px] shadow-sm">
                         <img src="{{ asset('assets/asset7.webp') }}" alt="Inženiersistēmas un būvniecība" class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                     </div>
                      <div class="p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50 flex flex-col justify-center">
                         <div class="flex items-center gap-4 mb-4">
                             <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                <i data-lucide="shield-check" class="w-5 h-5 text-primary"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-foreground">Kvalitātes garantija</h3>
                         </div>
                         <p class="text-sm text-muted-foreground leading-relaxed">
                             Visu inženiersistēmu izbūvē izmantojam tikai sertificētus materiālus un iekārtas, nodrošinot ilgtermiņa garantiju un efektīvu ekspluatāciju.
                         </p>
                     </div>
                </div>

                     {{-- Fasades --}}
                    <div class="p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50 mt-8">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center mb-5">
                            <i data-lucide="layers" class="w-5 h-5 text-primary"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-foreground mb-4">Fasādes un norobežojošās konstrukcijas</h3>
                        <ul class="space-y-2 mb-8">
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Alumīnija fasādes</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Stikla konstrukcijas</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Cehu stiklojums</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Logi</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Ieejas un iekšējās durvis</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Ugunsdrošās durvis</li>
                             <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Vitrīnu sistēmas</li>
                        </ul>
                        <p class="mt-4 text-xs text-muted-foreground/70 italic border-t border-border/50 pt-3">Atsevišķs virziens "Stikla konstrukcijas" eksistē gan kā patstāvīga sadaļa, gan kā kompleksas būvniecības sastāvdaļa.</p>
                    </div>

                     {{-- Areja infrastruktura --}}
                    <div class="p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50 mt-6 md:mt-8">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center mb-5">
                            <i data-lucide="fence" class="w-5 h-5 text-primary"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-foreground mb-4">Ārējā infrastruktūra</h3>
                        <ul class="space-y-2">
                             <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Vārti</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Žogi</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Pievedceļi</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Teritorijas labiekārtošana</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Autostāvvietas</li>
                            <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-1.5 h-1.5 rounded-full bg-primary shrink-0"></span>Ārējais apgaismojums</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

         {{-- 5. WORK FORMAT --}}
        <section class="w-full py-16 md:py-24 bg-[#e8e8ee]">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-3">Formāts</span>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-foreground tracking-tight">Darba formāts</h2>
                </div>
                {{-- Top row: 3 items --}}
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 md:gap-6 mb-4 md:mb-6">
                    <div class="group p-6 md:p-8 bg-background rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-5 -mt-2 transition-colors">
                            <i data-lucide="briefcase" class="w-6 h-6 text-primary transition-colors"></i>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-2">Ģenerāluzņēmējs</h4>
                        <p class="text-sm text-muted-foreground leading-relaxed">Pilna atbildība par projektu no projektēšanas līdz nodošanai ekspluatācijā</p>
                    </div>
                    <div class="group p-6 md:p-8 bg-background rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-5 -mt-2 transition-colors">
                            <i data-lucide="pencil-ruler" class="w-6 h-6 text-primary transition-colors"></i>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-2">Design & Build</h4>
                        <p class="text-sm text-muted-foreground leading-relaxed">Integrēta projektēšana un būvniecība vienā komandā</p>
                    </div>
                     <div class="group p-6 md:p-8 bg-background rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-5 -mt-2 transition-colors">
                            <i data-lucide="clipboard-list" class="w-6 h-6 text-primary transition-colors"></i>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-2">Būvniecība pēc pasūtītāja projekta</h4>
                        <p class="text-sm text-muted-foreground leading-relaxed">Realizācija pēc gatava projekta ar budžeta kontroli</p>
                    </div>
                </div>
                 {{-- Bottom row: 2 items centered --}}
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 md:gap-6 max-w-full lg:max-w-[66%] mx-auto">
                    <div class="group p-6 md:p-8 bg-background rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-5 -mt-2 transition-colors">
                            <i data-lucide="puzzle" class="w-6 h-6 text-primary transition-colors"></i>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-2">Daļēji būvdarbi</h4>
                        <p class="text-sm text-muted-foreground leading-relaxed">Atsevišķi darbu posmi un specializēti risinājumi</p>
                    </div>
                    <div class="group p-6 md:p-8 bg-background rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-5 -mt-2 transition-colors">
                            <i data-lucide="key-round" class="w-6 h-6 text-primary transition-colors"></i>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-2">Kompleksie risinājumi "atslēgas"</h4>
                        <p class="text-sm text-muted-foreground leading-relaxed">No koncepcijas līdz nodošanai – pilns cikls</p>
                    </div>
                </div>
            </div>
        </section>

         {{-- 6. STAGES --}}
        <section class="w-full py-16 md:py-24 bg-background">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-3">Process</span>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-foreground tracking-tight">Projekta realizācijas posmi</h2>
                </div>
                {{-- Top row: 4 --}}
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 md:gap-6 mb-4 md:mb-6">
                    <div class="group relative p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-2xl font-bold text-primary/30">01</span>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-1">Pirmreizējā konsultācija</h4>
                        <p class="text-sm text-muted-foreground">Uzdevuma analīze</p>
                    </div>
                    <div class="group relative p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-2xl font-bold text-primary/30">02</span>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-1">Budžeta aprēķins</h4>
                        <p class="text-sm text-muted-foreground">Sākotnējā tāme</p>
                    </div>
                     <div class="group relative p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-2xl font-bold text-primary/30">03</span>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-1">Līguma sagatavošana</h4>
                        <p class="text-sm text-muted-foreground">Juridiskā noformēšana</p>
                    </div>
                     <div class="group relative p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-2xl font-bold text-primary/30">04</span>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-1">Projektēšana</h4>
                        <p class="text-sm text-muted-foreground">Saskaņošana un dokumentācija</p>
                    </div>
                </div>
                 {{-- Bottom row: 3 centered --}}
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 md:gap-6 max-w-full lg:max-w-[75%] mx-auto">
                    <div class="group relative p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-2xl font-bold text-primary/30">05</span>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-1">Būvniecība</h4>
                        <p class="text-sm text-muted-foreground">Objekta realizācija</p>
                    </div>
                    <div class="group relative p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-2xl font-bold text-primary/30">06</span>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-1">Nodošana ekspluatācijā</h4>
                        <p class="text-sm text-muted-foreground">Pieņemšanas process</p>
                    </div>
                    <div class="group relative p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-2xl font-bold text-primary/30">07</span>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-1">Garantija</h4>
                        <p class="text-sm text-muted-foreground">Garantijas apkalpošana</p>
                    </div>
                </div>
            </div>
        </section>

         {{-- 7. PROJECTS --}}
        <section class="w-full py-16 md:py-24 bg-[#e8e8ee]">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-3">Projekti</span>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-foreground tracking-tight">Realizētie projekti</h2>
                </div>

                {{-- Filters removed for UI requirements --}}

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
                                    <span class="text-xs font-medium text-white">{{ App::getLocale() === 'ru' ? ($project->tag_1_ru ?? '������') : ($project->tag_1_lv ?? 'Projekts') }}</span>
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
                            {{ App::getLocale() === 'ru' ? '������� �� �������.' : 'Projekti nav atrasti.' }}
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

         {{-- 8. WHY ALUSTAR --}}
        <section class="w-full py-16 md:py-24 bg-background">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-3">Kāpēc AluStar</span>
                    <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-foreground tracking-tight">Kāpēc izvēlēties mūs</h2>
                </div>
                 {{-- Top row: 3 --}}
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 md:gap-6 mb-4 md:mb-6">
                    <div class="group flex flex-col items-center text-center p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0 transition-colors">
                            <i data-lucide="award" class="w-6 h-6 text-primary transition-colors"></i>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-2">19+ gadu pieredze</h4>
                        <p class="text-sm text-muted-foreground leading-relaxed">Sarežģītu objektu realizācija no daudzdzīvokļu mājām līdz industriāliem kompleksiem</p>
                    </div>
                    <div class="group flex flex-col items-center text-center p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center shrink-0 transition-colors">
                            <i data-lucide="layers" class="w-6 h-6 text-primary transition-colors"></i>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-2">Viss zem viena jumta</h4>
                        <p class="text-sm text-muted-foreground leading-relaxed">Konstruktīvs, inženiersistēmas, fasādes un ārējā infrastruktūra bez starpnieku ķēdēm</p>
                    </div>
                     <div class="group flex flex-col items-center text-center p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-5 transition-colors">
                            <i data-lucide="shield" class="w-6 h-6 text-primary transition-colors"></i>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-2">Kompetence stikla konstrukcijās</h4>
                        <p class="text-sm text-muted-foreground leading-relaxed">Sava alumīnija un stikla ražotne – ātrāka reakcija, zemākas izmaksas, augstāka kvalitāte</p>
                    </div>
                </div>
                {{-- Bottom row: 2 centered --}}
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 md:gap-6 max-w-full lg:max-w-[66%] mx-auto">
                    <div class="group flex flex-col items-center text-center p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-5 transition-colors">
                            <i data-lucide="trending-up" class="w-6 h-6 text-primary transition-colors"></i>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-2">Budžets un termiņi</h4>
                        <p class="text-sm text-muted-foreground leading-relaxed">Iknedēļas atskaites, fiksētas tāmes, sodi par kavējumiem – mēs uzņemamies risku</p>
                    </div>
                     <div class="group flex flex-col items-center text-center p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50 hover:border-primary/30 transition-all duration-300 hover:shadow-md">
                        <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-5 transition-colors">
                            <i data-lucide="file-text" class="w-6 h-6 text-primary transition-colors"></i>
                        </div>
                        <h4 class="text-base font-semibold text-foreground mb-2">Garantija līdz 5 gadiem</h4>
                        <p class="text-sm text-muted-foreground leading-relaxed">Pilna garantijas apkalpošana pēc nodošanas ar dokumentētu atbildības sadalījumu</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- 9. CTA --}}
        @include('partials.cta-section')
    </div>
@endsection
