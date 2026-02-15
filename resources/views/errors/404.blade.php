@extends('layouts.app')

@section('title', 'Lapa nav atrasta - AluStar')

@section('content')
    <div class="flex-1 w-full flex items-center justify-center py-20 min-h-[60vh]">
        <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16 w-full">
            <div class="flex flex-col items-center text-center">
                <!-- 404 Number -->
                <span class="text-[120px] md:text-[180px] font-bold leading-none text-primary/20 select-none">
                    404
                </span>
                
                <!-- Title -->
                <h1 class="text-3xl md:text-4xl font-bold text-foreground -mt-4 mb-4">
                    Lapa nav atrasta
                </h1>
                
                <!-- Description -->
                <p class="text-muted-foreground text-lg max-w-md mb-8">
                    Diemžēl pieprasītā lapa neeksistē vai ir pārvietota.
                </p>
                
                <!-- CTA Button -->
                <a href="{{ url('/') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-primary-foreground rounded-lg font-medium hover:bg-primary/90 transition-all duration-200 hover:shadow-lg">
                    Atgriezties sākumlapā
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
        </div>
    </div>
@endsection
