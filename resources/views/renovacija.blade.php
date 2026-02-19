@extends('layouts.app')

@section('title', 'Renovācija - AluStar')
@section('meta_description', 'Nodrošinām ēku renovācijas pakalpojumus: sienu, pagrabu un jumtu siltināšanu, kā arī inženiertīklu nomaiņu, garantējot kvalitatīvu rezultātu.')

@section('content')
    <div>
        {{-- 1. HERO --}}
        <section class="relative w-full h-[500px] md:h-[600px] overflow-hidden">
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('assets/asset1.webp') }}')"></div>
            <div class="absolute inset-0" style="background-color: rgba(0, 0, 0, 0.7);"></div>
            <div class="relative h-full flex items-end">
                <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16 w-full pb-16 md:pb-20">
                    <span class="inline-block text-xs font-medium text-primary-foreground/70 uppercase tracking-widest mb-4">Pakalpojumi</span>
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-primary-foreground tracking-tight mb-4 max-w-3xl">
                        Renovācija
                    </h1>
                    <p class="text-base md:text-lg text-primary-foreground/80 mb-2 max-w-2xl">
                        Renovācija pagarina ēkas ekspluatācijas laiku, tādējādi novēršot avārijas situācijas nākotnē.
                    </p>
                    <div class="flex flex-wrap gap-3 mt-8">
                        <a href="#contact" class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-primary-foreground rounded-lg font-medium hover:bg-primary/90 transition-all">
                            Pieteikt projektu <i data-lucide="arrow-right" class="w-4 h-4"></i>
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
                        <h2 class="text-2xl md:text-3xl font-bold text-foreground mb-6">Kāpēc renovācija ir svarīga?</h2>
                        <p class="text-muted-foreground mb-4">
                            Mūsu augsti kvalificētie speciālisti noteiks, tieši kāds renovācijas veids ir nepieciešams Jūsu ēkai.
                            Lai darbs būtu kvalitatīvs, ir jāievēro darbību secība – tas ir ārkārtīgi svarīgi.
                        </p>
                        <p class="text-muted-foreground">
                            Renovācija ne tikai uzlabo ēkas vizuālo izskatu, bet arī būtiski palielina tās energoefektivitāti,
                            samazinot apkures izmaksas un uzlabojot dzīves kvalitāti iedzīvotājiem.
                        </p>
                    </div>
                    <div class="bg-muted/30 p-8 rounded-2xl border border-border/50">
                        <h3 class="text-xl font-semibold text-foreground mb-6">Renovācijas darbu secība:</h3>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center shrink-0 mt-0.5">
                                    <i data-lucide="check" class="w-4 h-4 text-primary"></i>
                                </div>
                                <span class="text-foreground/80">Sienu siltināšana</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center shrink-0 mt-0.5">
                                    <i data-lucide="check" class="w-4 h-4 text-primary"></i>
                                </div>
                                <span class="text-foreground/80">Pagrabu siltināšana</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center shrink-0 mt-0.5">
                                    <i data-lucide="check" class="w-4 h-4 text-primary"></i>
                                </div>
                                <span class="text-foreground/80">Jumtu un bēniņu siltināšana</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center shrink-0 mt-0.5">
                                    <i data-lucide="check" class="w-4 h-4 text-primary"></i>
                                </div>
                                <span class="text-foreground/80">Logu nomaiņa</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center shrink-0 mt-0.5">
                                    <i data-lucide="check" class="w-4 h-4 text-primary"></i>
                                </div>
                                <span class="text-foreground/80">Apkures sistēmas</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center shrink-0 mt-0.5">
                                    <i data-lucide="check" class="w-4 h-4 text-primary"></i>
                                </div>
                                <span class="text-foreground/80">Ūdensapgādes sistēmas</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center shrink-0 mt-0.5">
                                    <i data-lucide="check" class="w-4 h-4 text-primary"></i>
                                </div>
                                <span class="text-foreground/80">Ventilācijas sistēmas</span>
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
                    <h2 class="text-2xl md:text-3xl font-bold text-foreground">Darba Process</h2>
                    <p class="text-muted-foreground mt-4 max-w-2xl mx-auto">Mēs nodrošinām pilnu cikla renovāciju no audita līdz atslēgai.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="bg-background p-6 rounded-xl border border-border/50 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-4">
                            <span class="text-xl font-bold text-primary">1</span>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Energoaudits</h3>
                        <p class="text-sm text-muted-foreground">Ēkas stāvokļa novērtēšana un nepieciešamo darbu noteikšana.</p>
                    </div>
                    <div class="bg-background p-6 rounded-xl border border-border/50 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-4">
                            <span class="text-xl font-bold text-primary">2</span>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Tehniskais projekts</h3>
                        <p class="text-sm text-muted-foreground">Projekta izstrāde un saskaņošana ar atbildīgajām iestādēm.</p>
                    </div>
                    <div class="bg-background p-6 rounded-xl border border-border/50 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-4">
                            <span class="text-xl font-bold text-primary">3</span>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Būvniecība</h3>
                        <p class="text-sm text-muted-foreground">Kvalitatīva būvdarbu veikšana un autoruzraudzība.</p>
                    </div>
                    <div class="bg-background p-6 rounded-xl border border-border/50 shadow-sm hover:shadow-md transition-shadow">
                        <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-4">
                            <span class="text-xl font-bold text-primary">4</span>
                        </div>
                        <h3 class="text-lg font-semibold mb-2">Nodošana ekspluatācijā</h3>
                        <p class="text-sm text-muted-foreground">Objekta nodošana pasūtītājam un garantijas serviss.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- 4. ADVANTAGES --}}
        <section class="w-full py-16 md:py-24 bg-muted/20">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-16">
                    <h2 class="text-2xl md:text-3xl font-bold text-foreground">Renovācijas Priekšrocības</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="flex flex-col items-center text-center p-6">
                        <div class="w-16 h-16 rounded-xl bg-primary/10 flex items-center justify-center mb-6 shrink-0">
                            <i data-lucide="zap" class="w-8 h-8 text-primary"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Energoefektivitāte</h3>
                        <p class="text-muted-foreground">Samaziniet apkures rēķinus un uzlabojiet ēkas energoklasi.</p>
                    </div>
                    <div class="flex flex-col items-center text-center p-6">
                        <div class="w-16 h-16 rounded-xl bg-primary/10 flex items-center justify-center mb-6 shrink-0">
                            <i data-lucide="trending-up" class="w-8 h-8 text-primary"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Īpašuma vērtība</h3>
                        <p class="text-muted-foreground">Renovētas ēkas tirgus vērtība ievērojami pieaug.</p>
                    </div>
                    <div class="flex flex-col items-center text-center p-6">
                        <div class="w-16 h-16 rounded-xl bg-primary/10 flex items-center justify-center mb-6 shrink-0">
                            <i data-lucide="smile" class="w-8 h-8 text-primary"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Dzīves kvalitāte</h3>
                        <p class="text-muted-foreground">Uzlabots mikroklimats un estētiskais izskats.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- 5. REALIZED PROJECTS --}}
        <section class="w-full py-16 bg-[#E8E8EE]">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <h2 class="text-2xl md:text-3xl font-bold text-foreground">Realizētie Projekti</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="group relative overflow-hidden rounded-xl shadow-lg">
                        <div class="relative aspect-[4/3]">
                            <img src="{{ asset('assets/doposle1.webp') }}" alt="Renovācija Pirms un Pēc 1" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end p-6">
                                <span class="text-white font-semibold text-lg">Pirms un Pēc</span>
                            </div>
                        </div>
                    </div>
                    <div class="group relative overflow-hidden rounded-xl shadow-lg">
                        <div class="relative aspect-[4/3]">
                            <img src="{{ asset('assets/doposle2.webp') }}" alt="Renovācija Pirms un Pēc 2" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end p-6">
                                <span class="text-white font-semibold text-lg">Pirms un Pēc</span>
                            </div>
                        </div>
                    </div>
                    <div class="group relative overflow-hidden rounded-xl shadow-lg">
                        <div class="relative aspect-[4/3]">
                            <img src="{{ asset('assets/doposle3.webp') }}" alt="Renovācija Pirms un Pēc 3" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex items-end p-6">
                                <span class="text-white font-semibold text-lg">Pirms un Pēc</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('partials.cta-section')
    </div>
@endsection
