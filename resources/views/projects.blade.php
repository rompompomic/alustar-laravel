@extends(app()->getLocale() === 'ru' ? 'layouts.app-ru' : 'layouts.app')

@section('title', 'Projekti - AluStar')
@section('meta_description', 'Mūsu realizētie projekti: dzīvojamās ēkas, komerciālie objekti un sabiedriskās būves.')

@section('content')
    @php
        $locale = app()->getLocale();
        $isRu = $locale === 'ru';
    @endphp

    <div class="flex flex-col min-h-screen">
        {{-- Hero Section --}}
        <section class="w-full py-[50px] bg-gradient-to-b from-background to-muted/30">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="max-w-3xl">
                    <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-4">
                        Portfolio
                    </span>
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-foreground tracking-tight mb-6">
                        {{ $isRu ? 'Реализованные проекты' : 'Realizētie projekti' }}
                    </h1>
                    <p class="text-base md:text-lg text-muted-foreground leading-relaxed">
                        {{ $isRu ? 'Наш опыт включает в себя как сложные фасадные системы, так и проекты полного цикла строительства. Каждый объект является подтверждением нашей инженерной компетентности.' : 'Mūsu pieredze ietver gan sarežģītas fasāžu sistēmas, gan pilna cikla būvniecības projektus. Katrs objekts
                        ir apliecinājums mūsu inženiertehniskajai kompetencei.' }}
                    </p>
                </div>
            </div>
        </section>

        {{-- Projects Grid --}}
        <section class="w-full py-16 md:py-24 bg-background">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 md:gap-8">
                    @foreach($projects as $project)
                        @php
                            $title = $project->{'title_' . $locale} ?? $project->title_lv;
                            $location = $project->{'location_' . $locale} ?? $project->location_lv;
                            $challenge = $project->{'challenge_' . $locale} ?? $project->challenge_lv;
                            $imageUrl = $project->cover_image ? asset('storage/' . $project->cover_image) : asset('assets/alustar-logo.webp');

                            // Tags
                            $tag1 = $project->{'tag_1_' . $locale} ?? $project->tag_1_lv;
                            $tag2 = $project->{'tag_2_' . $locale} ?? $project->tag_2_lv;
                            $tag3 = $project->{'tag_3_' . $locale} ?? $project->tag_3_lv;
                        @endphp
                        
                        <a href="{{ route('project.show', $project->slug) }}" class="group bg-background rounded-2xl overflow-hidden border border-border/50 transition-all duration-500 hover:shadow-xl hover:border-primary/30 cursor-pointer flex flex-col">
                            {{-- Image --}}
                            <div class="relative h-64 overflow-hidden shrink-0">
                                <img
                                    src="{{ $imageUrl }}"
                                    alt="{{ $title }}"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                                >
                                
                                {{-- Tag 1 (Top Left) --}}
                                @if($tag1)
                                <div class="absolute top-4 left-4 ml-2 px-3 py-1.5 rounded-full text-white bg-primary z-10 w-fit">
                                    <span class="text-xs font-medium text-white">{{ $tag1 }}</span>
                                </div>
                                @endif

                                {{-- Arrow Icon Overlay --}}
                                <div class="absolute top-4 right-4 w-10 h-10 rounded-full bg-white flex items-center justify-center z-10 shadow-sm opacity-0 -translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                                    <i data-lucide="arrow-up-right" class="w-5 h-5 text-primary"></i>
                                </div>
                            </div>

                            {{-- Content --}}
                            <div class="p-6 flex flex-col flex-1">
                                {{-- Volume + Label --}}
                                <div class="flex items-center gap-3 flex-wrap mb-4">
                                    @if($tag2)
                                    <span class="inline-flex items-center justify-center h-8 px-4 rounded-full text-sm font-bold whitespace-nowrap bg-primary text-white">
                                        {{ $tag2 }}
                                    </span>
                                    @endif

                                    @if($tag3)
                                    <span class="inline-flex items-center justify-center h-8 px-4 rounded-full text-sm font-bold whitespace-nowrap bg-primary text-white">
                                        {{ $tag3 }}
                                    </span>
                                    @endif
                                </div>

                                {{-- Name --}}
                                <h3 class="text-xl font-bold text-foreground leading-tight mb-2 group-hover:text-primary transition-colors">
                                    {{ $title }}
                                </h3>

                                <p class="text-sm text-muted-foreground mb-6 line-clamp-2">{{ $challenge }}</p>

                                <div class="mt-auto pt-4 border-t border-border/50 flex items-center justify-between text-sm">
                                    <span class="text-foreground font-medium">{{ $location }}</span>
                                    <span class="text-muted-foreground">{{ $project->year }}</span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
