<x-filament-panels::page>
    <form wire:submit="save"> 
        {{ $this->form }}
 
        <div class="mt-8" style="padding-top: 2rem;">
            <div class="flex flex-wrap items-center gap-4 justify-start">
                @foreach ($this->getFormActions() as $action)
                    {{ $action }}
                @endforeach
            </div>
        </div>
    </form>
</x-filament-panels::page>
