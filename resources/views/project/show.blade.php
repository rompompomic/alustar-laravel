@extends(app()->getLocale() === 'ru' ? 'layouts.app-ru' : 'layouts.app')

@php
    $locale = app()->getLocale();
    $isRu = $locale === 'ru';
    
    $title = $project->{'title_' . $locale} ?? $project->title_lv;
    $seo_title = $project->{'seo_title_' . $locale} ?? $project->seo_title_lv ?? $title;
    $meta_desc = $project->{'seo_description_' . $locale} ?? $project->seo_description_lv;
    
    $content = $project->{'content_' . $locale} ?? $project->content_lv;
    $location = $project->{'location_' . $locale} ?? $project->location_lv;
    $team = $project->{'team_' . $locale} ?? $project->team_lv;
    
    $challenge = $project->{'challenge_' . $locale} ?? $project->challenge_lv;
    $solution = $project->{'solution_' . $locale} ?? $project->solution_lv;
    $result = $project->{'result_' . $locale} ?? $project->result_lv;
    
    $gallery = array_map(fn($img) => asset('storage/' . $img), $project->gallery_images ?? []);
    if (empty($gallery) && $project->cover_image) {
        $gallery = [asset('storage/' . $project->cover_image)];
    }

    $getList = function($key) use ($project, $locale) {
        $data = $project->$key ?? [];
        if (!is_array($data)) return [];
        return array_filter(array_map(fn($item) => $item['item_' . $locale] ?? $item['item_lv'] ?? '', $data));
    };

    $scopeList = $getList('scope');
    $techList = $getList('technologies');
    $achievList = $getList('achievements');
@endphp

@section('title', $seo_title)
@section('meta_description', $meta_desc)

@section('content')
    <div x-data="{ lightboxOpen: false, lightboxIndex: 0, images: {{ json_encode($gallery) }} }">
        <!-- Hero Section -->
        <section class="relative w-full h-[50vh] md:h-[60vh] lg:h-[70vh] overflow-hidden">
            @if($project->cover_image)
            <img src="{{ asset('storage/' . $project->cover_image) }}" alt="{{ $title }}" class="w-full h-full object-cover">
            @endif
            <div class="absolute inset-0 bg-gradient-to-t from-background via-background/50 to-transparent"></div>
            
            <div class="absolute bottom-0 left-0 right-0 pb-12 md:pb-16 lg:pb-20">
                <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                    <a href="{{ route('projects') }}" class="inline-flex items-center gap-2 px-4 py-2 mb-6 bg-background/80 backdrop-blur-sm rounded-lg hover:bg-background transition-colors text-foreground">
                        <i data-lucide="arrow-left" class="w-4 h-4"></i>
                        <span class="text-sm font-medium">{{ $isRu ? 'Назад' : 'Atpakaļ' }}</span>
                    </a>
                    
                    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-foreground tracking-tight">
                        {{ $title }}
                    </h1>
                </div>
            </div>
        </section>

        <!-- Project Info -->
        <section class="w-full py-8 border-b border-border">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    @if($location)
                    <div class="flex items-start gap-3">
                        <i data-lucide="map-pin" class="w-5 h-5 text-primary mt-0.5 shrink-0"></i>
                        <div>
                            <p class="text-xs text-muted-foreground mb-1">{{ $isRu ? 'Местоположение' : 'Atrašanās vieta' }}</p>
                            <p class="text-sm font-medium text-foreground">{{ $location }}</p>
                        </div>
                    </div>
                    @endif
                    
                    @if($project->year)
                    <div class="flex items-start gap-3">
                        <i data-lucide="calendar" class="w-5 h-5 text-primary mt-0.5 shrink-0"></i>
                        <div>
                            <p class="text-xs text-muted-foreground mb-1">{{ $isRu ? 'Год реализации' : 'Realizācijas gads' }}</p>
                            <p class="text-sm font-medium text-foreground">{{ $project->year }}</p>
                        </div>
                    </div>
                    @endif

                    @if($project->area)
                    <div class="flex items-start gap-3">
                        <i data-lucide="ruler" class="w-5 h-5 text-primary mt-0.5 shrink-0"></i>
                        <div>
                            <p class="text-xs text-muted-foreground mb-1">{{ $isRu ? 'Объем' : 'Apjoms' }}</p>
                            <p class="text-sm font-medium text-foreground">{{ $project->area }}</p>
                        </div>
                    </div>
                    @endif

                    @if($team)
                    <div class="flex items-start gap-3">
                        <i data-lucide="users" class="w-5 h-5 text-primary mt-0.5 shrink-0"></i>
                        <div>
                            <p class="text-xs text-muted-foreground mb-1">{{ $isRu ? 'Команда' : 'Komanda' }}</p>
                            <p class="text-sm font-medium text-foreground">{{ $team }}</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </section>

        <!-- Main Image (First form gallery or Cover) -->
        @if(!empty($gallery))
        <section class="w-full pt-8 md:pt-12">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="rounded-2xl overflow-hidden border border-border/50">
                    <img src="{{ $gallery[0] }}" alt="{{ $title }}" class="w-full h-[300px] md:h-[400px] lg:h-[500px] object-cover">
                </div>
            </div>
        </section>
        @endif

        <!-- Challenge / Solution / Result -->
        @if($challenge || $solution || $result)
        <section class="w-full py-16 md:py-24 bg-background">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">
                    <!-- Challenge -->
                    @if($challenge)
                    <div class="p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50">
                        <div class="w-10 h-1 bg-primary rounded-full mb-6"></div>
                        <h2 class="text-xl md:text-2xl font-bold text-foreground tracking-tight mb-4">
                            {{ $isRu ? 'Вызов' : 'Izaicinājums' }}
                        </h2>
                        <p class="text-sm text-muted-foreground leading-relaxed">
                            {{ $challenge }}
                        </p>
                    </div>
                    @endif

                    <!-- Solution -->
                    @if($solution)
                    <div class="p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50">
                        <div class="w-10 h-1 bg-primary rounded-full mb-6"></div>
                        <h2 class="text-xl md:text-2xl font-bold text-foreground tracking-tight mb-4">
                            {{ $isRu ? 'Решение' : 'Risinājums' }}
                        </h2>
                        <p class="text-sm text-muted-foreground leading-relaxed">
                            {{ $solution }}
                        </p>
                    </div>
                    @endif

                    <!-- Result -->
                    @if($result)
                    <div class="p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50">
                        <div class="w-10 h-1 bg-primary rounded-full mb-6"></div>
                        <h2 class="text-xl md:text-2xl font-bold text-foreground tracking-tight mb-4">
                            {{ $isRu ? 'Результат' : 'Rezultāts' }}
                        </h2>
                        <p class="text-sm text-muted-foreground leading-relaxed">
                            {{ $result }}
                        </p>
                    </div>
                    @endif
                </div>
            </div>
        </section>
        @endif

        <!-- Achievements -->
        @if(!empty($achievList))
        <section class="w-full py-16 md:py-24 bg-[#e8e8ee]">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                     <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-3">
                        {{ $isRu ? 'Достижения' : 'Sasniegumi' }}
                    </span>
                    <h2 class="text-2xl md:text-3xl font-bold text-foreground tracking-tight">
                        {{ $isRu ? 'Результаты проекта' : 'Projekta rezultāti' }}
                    </h2>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 justify-center">
                    @foreach($achievList as $item)
                    <div class="group p-6 bg-background rounded-2xl border border-border/50 text-center transition-all duration-300 hover:border-primary/30 hover:shadow-md">
                        <div class="w-12 h-12 flex items-center justify-center bg-primary/10 rounded-xl mx-auto mb-4">
                            <i data-lucide="check-circle-2" class="w-6 h-6 text-primary"></i>
                        </div>
                        <span class="text-sm font-medium text-foreground">
                            {{ $item }}
                        </span>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        @endif

        <!-- Content (Rich Text) -->
        @if($content)
        <section class="w-full pt-8 pb-4">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="prose prose-sm md:prose-base max-w-4xl text-foreground/80 leading-relaxed">
                    {!! $content !!}
                </div>
            </div>
        </section>
        @endif

        <!-- Scope & Technologies -->
        @if(!empty($scopeList) || !empty($techList))
        <section class="w-full pt-4 pb-16 md:pb-24 bg-background">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
                    <!-- Scope -->
                    @if(!empty($scopeList))
                    <div class="p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50">
                        <h3 class="text-xs font-semibold uppercase tracking-wider text-foreground mb-6">
                            {{ $isRu ? 'Объем работ' : 'Darbu apjoms' }}
                        </h3>
                        <ul class="space-y-3">
                            @foreach($scopeList as $item)
                            <li class="flex items-start gap-3">
                                <div class="w-1.5 h-1.5 rounded-full bg-primary mt-2 shrink-0"></div>
                                <span class="text-sm text-muted-foreground">{{ $item }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <!-- Technologies -->
                    @if(!empty($techList))
                    <div class="p-6 md:p-8 bg-muted/30 rounded-2xl border border-border/50">
                        <h3 class="text-xs font-semibold uppercase tracking-wider text-foreground mb-6">
                            {{ $isRu ? 'Технологии' : 'Tehnoloģijas' }}
                        </h3>
                        <ul class="space-y-3">
                            @foreach($techList as $item)
                            <li class="flex items-start gap-3">
                                <div class="w-1.5 h-1.5 rounded-full bg-primary mt-2 shrink-0"></div>
                                <span class="text-sm text-muted-foreground">{{ $item }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
        </section>
        @endif

        <!-- Gallery Grid -->
        @if(count($gallery) > 0)
        <section class="w-full py-16 md:py-24 bg-[#e8e8ee]">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
                <div class="text-center mb-12">
                    <span class="inline-block text-xs font-medium text-primary uppercase tracking-widest mb-3">
                        {{ $isRu ? 'Галерея' : 'Galerija' }}
                    </span>
                    <h2 class="text-2xl md:text-3xl font-bold text-foreground tracking-tight">
                        {{ $isRu ? 'Фотографии проекта' : 'Projekta fotogrāfijas' }}
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-6">
                    <template x-for="(img, idx) in images" :key="idx">
                        <div 
                            class="rounded-2xl overflow-hidden border border-border/50 cursor-pointer"
                            @click="lightboxIndex = idx; lightboxOpen = true"
                        >
                            <img 
                                :src="img" 
                                alt="Gallery Image" 
                                class="w-full h-56 md:h-72 object-cover hover:scale-105 transition-transform duration-500" 
                            >
                        </div>
                    </template>
                </div>
            </div>
        </section>
        @endif

         <!-- Lightbox Modal -->
        <div 
            x-show="lightboxOpen" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-[100] flex items-center justify-center bg-black/90 backdrop-blur-sm"
            @keydown.escape.window="lightboxOpen = false"
            style="display: none;"
        >
            <button 
                @click="lightboxOpen = false" 
                class="absolute top-4 right-4 p-2 text-white/50 hover:text-white transition-colors"
            >
                <i data-lucide="x" class="w-8 h-8"></i>
            </button>

            <button 
                @click="lightboxIndex = (lightboxIndex - 1 + images.length) % images.length" 
                class="absolute left-4 p-2 text-white/50 hover:text-white transition-colors"
                x-show="images.length > 1"
            >
                <i data-lucide="chevron-left" class="w-8 h-8"></i>
            </button>

            <img 
                :src="images[lightboxIndex]" 
                class="max-w-[90vw] max-h-[90vh] object-contain rounded-lg"
            >

            <button 
                @click="lightboxIndex = (lightboxIndex + 1) % images.length" 
                class="absolute right-4 p-2 text-white/50 hover:text-white transition-colors"
                x-show="images.length > 1"
            >
                <i data-lucide="chevron-right" class="w-8 h-8"></i>
            </button>
             <div class="absolute bottom-4 left-1/2 -translate-x-1/2 text-white/70 text-sm" x-show="images.length > 1">
                <span x-text="lightboxIndex + 1"></span> / <span x-text="images.length"></span>
            </div>
        </div>

        <!-- CTA -->
        <section class="w-full py-16 md:py-24 bg-secondary">
            <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16 text-center">
                <span class="inline-block text-xs font-medium text-primary-foreground/70 uppercase tracking-widest mb-4">
                    {{ $isRu ? 'Готовы начать?' : 'Gatavi sākt?' }}
                </span>
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-primary-foreground tracking-tight mb-6">
                    {{ $isRu ? 'Хотите похожий проект?' : 'Vēlaties līdzīgu projektu?' }}
                </h2>
                <p class="text-base md:text-lg text-primary-foreground/80 mb-10 max-w-2xl mx-auto">
                    {{ $isRu ? 'Свяжитесь с нами, чтобы обсудить требования и возможности вашего проекта.' : 'Sazināsimies, lai apspriestu jūsu projekta prasības un iespējas.' }}
                </p>
                <div class="pt-8">
                    <a href="{{ url('/') }}#contact" class="inline-flex items-center gap-2 px-6 py-3 bg-white text-gray-900 rounded-xl font-bold hover:opacity-90 hover:shadow-lg transition-all duration-200">
                        <span>{{ $isRu ? 'Запросить предложение' : 'Pieprasīt piedāvājumu' }}</span>
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection
