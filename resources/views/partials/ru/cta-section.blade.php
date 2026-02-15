<section id="contact" class="w-full py-16 md:py-24 bg-primary scroll-mt-28">
    <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">
            <div class="flex flex-col justify-center">
                <span class="inline-block text-xs font-medium text-primary-foreground/70 uppercase tracking-widest mb-3">Контакты</span>
                <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-primary-foreground tracking-tight mb-6">Запросить техническое предложение</h2>
                <p class="text-base md:text-lg text-primary-foreground/80 mb-8 leading-relaxed">Опишите объем проекта — подготовим техническое решение и расчет стоимости.</p>
                <div class="space-y-4 mb-8">
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 rounded-full bg-primary-foreground/60"></div>
                        <span class="text-sm text-primary-foreground/90">Расчет фасадного проекта</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 rounded-full bg-primary-foreground/60"></div>
                        <span class="text-sm text-primary-foreground/90">Спецификация стеклоконструкций</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-2 h-2 rounded-full bg-primary-foreground/60"></div>
                        <span class="text-sm text-primary-foreground/90">Предложение полного цикла строительства</span>
                    </div>
                </div>
                <div class="space-y-3 pt-6 border-t border-primary-foreground/20">
                    <a href="tel:+37129265665" class="flex items-center gap-3 text-primary-foreground/80 hover:text-primary-foreground transition-colors">
                        <i data-lucide="phone" class="w-4 h-4"></i>
                        <span class="text-sm">+371 29 265 665</span>
                    </a>
                    <a href="mailto:info@alustar.lv" class="flex items-center gap-3 text-primary-foreground/80 hover:text-primary-foreground transition-colors">
                        <i data-lucide="mail" class="w-4 h-4"></i>
                        <span class="text-sm">info@alustar.lv</span>
                    </a>
                </div>
            </div>
            <div>
                @if(session('success'))
                    <div class="bg-white/10 border border-white/20 text-white px-6 py-4 rounded-xl relative mb-6 backdrop-blur-sm" role="alert">
                        <div class="flex items-center gap-3">
                            <div class="p-2 bg-green-500/20 rounded-full">
                                <i data-lucide="check" class="w-5 h-5 text-green-400"></i>
                            </div>
                            <div>
                                <strong class="font-bold text-lg block mb-0.5">Спасибо!</strong>
                                <span class="block opacity-90 text-sm md:text-base">{{ session('success') }}</span>
                            </div>
                        </div>
                    </div>
                @endif

                @if(session('error'))
                    <div class="bg-white/10 border border-white/20 text-white px-6 py-4 rounded-xl relative mb-6 backdrop-blur-sm" role="alert">
                         <div class="flex items-center gap-3">
                            <div class="p-2 bg-red-500/20 rounded-full">
                                <i data-lucide="alert-circle" class="w-5 h-5 text-red-400"></i>
                            </div>
                            <div>
                                <strong class="font-bold text-lg block mb-0.5">Ошибка!</strong>
                                <span class="block opacity-90 text-sm md:text-base">{{ session('error') }}</span>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="bg-white/10 border border-white/20 text-white px-6 py-4 rounded-xl relative mb-6 backdrop-blur-sm" role="alert">
                        <div class="flex items-start gap-3">
                            <div class="p-2 bg-red-500/20 rounded-full mt-1">
                                <i data-lucide="alert-triangle" class="w-5 h-5 text-red-400"></i>
                            </div>
                            <div>
                                <strong class="font-bold text-lg block mb-1">Пожалуйста, проверьте данные:</strong>
                                <ul class="list-disc pl-4 space-y-1 opacity-90 text-sm md:text-base">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif

                <form x-data="{ isSubmitting: false }" @submit="isSubmitting = true" action="{{ route('contact.store') }}" method="POST" class="bg-background rounded-2xl p-6 md:p-8 shadow-2xl">
                    @csrf
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6 mb-4 md:mb-6">
                        <div class="space-y-2">
                            <label for="company" class="text-sm font-medium text-foreground">Компания <span class="text-red-500">*</span></label>
                            <input id="company" name="company" required placeholder="Название компании" value="{{ old('company') }}" class="h-11 w-full rounded-md border border-input bg-muted/50 px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 transition-colors">
                        </div>
                        <div class="space-y-2">
                            <label for="contact" class="text-sm font-medium text-foreground">Контактное лицо <span class="text-red-500">*</span></label>
                            <input id="contact" name="contact" required placeholder="Ваше имя" value="{{ old('contact') }}" class="h-11 w-full rounded-md border border-input bg-muted/50 px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 transition-colors">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6 mb-4 md:mb-6">
                        <div class="space-y-2">
                            <label for="email" class="text-sm font-medium text-foreground">Эл. почта <span class="text-red-500">*</span></label>
                            <input id="email" name="email" type="email" required placeholder="janis@uznemums.lv" value="{{ old('email') }}" class="h-11 w-full rounded-md border border-input bg-muted/50 px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 transition-colors">
                        </div>
                        <div class="space-y-2">
                            <label for="phone" class="text-sm font-medium text-foreground">Телефон <span class="text-red-500">*</span></label>
                            <input id="phone" name="phone" type="tel" required placeholder="+371 20000000" value="{{ old('phone') }}" class="h-11 w-full rounded-md border border-input bg-muted/50 px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 transition-colors">
                        </div>
                    </div>
                    <div class="space-y-2 mb-6">
                        <label for="projectDescription" class="text-sm font-medium text-foreground">Описание проекта</label>
                        <textarea id="projectDescription" name="projectDescription" placeholder="Краткое описание проекта..." class="min-h-[100px] w-full rounded-md border border-input bg-muted/50 px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 transition-colors">{{ old('projectDescription') }}</textarea>
                    </div>
                    <button type="submit" :disabled="isSubmitting" class="w-full inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-11 px-8 hover:bg-primary/90 bg-primary text-primary-foreground">
                        <span x-show="!isSubmitting" class="flex items-center gap-2">
                            Отправить запрос <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </span>
                        <span x-show="isSubmitting" class="flex items-center gap-2" style="display: none;">
                            <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Отправка...
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
