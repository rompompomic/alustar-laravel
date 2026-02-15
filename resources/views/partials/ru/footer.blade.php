<footer class="w-full bg-secondary text-secondary-foreground">
    <div class="max-w-[1280px] mx-auto px-4 md:px-8 lg:px-16 py-12 md:py-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
            <div>
                <img src="{{ asset('assets/alustar-logo.webp') }}" alt="AluStar Logo" class="h-8 mb-4 brightness-0 invert">
                <p class="text-sm text-secondary-foreground/70 leading-relaxed mb-6">Инженерно-техническое предприятие по алюминиево-стеклянным конструкциям.</p>
                <a href="{{ url('/ru') }}#contact" class="inline-flex items-center gap-2 px-4 py-2 bg-primary text-primary-foreground rounded-lg text-sm font-medium hover:bg-primary/90 transition-colors">
                    Связаться
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wider mb-4">Навигация</h4>
                <ul class="space-y-3">
                    <li><a href="{{ url('/ru/buvnieciba') }}" class="text-sm text-secondary-foreground/70 hover:text-primary-foreground transition-colors">Строительство</a></li>
                    <li><a href="{{ url('/ru/stiklokonstrukcijas') }}" class="text-sm text-secondary-foreground/70 hover:text-primary-foreground transition-colors">Стеклянные конструкции</a></li>
                    <li><a href="{{ url('/ru/projects') }}" class="text-sm text-secondary-foreground/70 hover:text-primary-foreground transition-colors">Проекты</a></li>
                    <li><a href="{{ url('/ru/about') }}" class="text-sm text-secondary-foreground/70 hover:text-primary-foreground transition-colors">О нас</a></li>
                    <li><a href="{{ url('/ru') }}#contact" class="text-sm text-secondary-foreground/70 hover:text-primary-foreground transition-colors">Контакты</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-sm font-semibold uppercase tracking-wider mb-4">Контакты</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="tel:+37129265665" class="flex items-center gap-2 text-sm text-secondary-foreground/70 hover:text-primary-foreground transition-colors">
                            <i data-lucide="phone" class="w-4 h-4"></i>
                            +371 29 265 665
                        </a>
                    </li>
                    <li>
                        <a href="mailto:info@alustar.lv" class="flex items-center gap-2 text-sm text-secondary-foreground/70 hover:text-primary-foreground transition-colors">
                            <i data-lucide="mail" class="w-4 h-4"></i>
                            info@alustar.lv
                        </a>
                    </li>
                    <li>
                        <div class="flex items-start gap-2 text-sm text-secondary-foreground/70">
                            <i data-lucide="map-pin" class="w-4 h-4 mt-0.5 shrink-0"></i>
                            Ул. Тинужу 1А, Рига, LV-1021
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="mt-12 pt-8 border-t border-secondary-foreground/10 flex flex-col md:flex-row items-center justify-between gap-4">
            <p class="text-xs text-secondary-foreground/50">© {{ date('Y') }} AluStar. Все права защищены.</p>
            <div class="flex items-center gap-6">
                <a href="{{ url('/ru/privacy-policy') }}" class="text-xs text-secondary-foreground/50 hover:text-secondary-foreground transition-colors">Политика конфиденциальности</a>
            </div>
        </div>
    </div>
</footer>
