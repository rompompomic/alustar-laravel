<?php

namespace App\Filament\Pages;

use App\Models\Project;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Actions\Action;

class ManagePageProjects extends Page
{
    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-document-duplicate';
    protected static ?string $navigationLabel = 'Projekti lapās';
    protected static ?int $navigationSort = 2;
    protected static ?string $title = 'Projekti lapās';
    protected string $view = 'filament.pages.manage-page-projects';

    public ?array $data = [];

    public function mount(): void
    {
        $this->data = [
            'construction_projects' => Project::where('show_on_construction', true)->pluck('id')->toArray(),
            'glass_projects' => Project::where('show_on_glass', true)->pluck('id')->toArray(),
        ];
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make('Lapu iestatījumi / Page Settings')
                    ->description('Izvēlieties projektus, kas tiks rādīti attiecīgajās sadaļās.')
                    ->schema([
                        Select::make('construction_projects')
                            ->label('Projekti "Būvniecība" lapā')
                            ->multiple()
                            ->options(Project::all()->pluck('title_lv', 'id'))
                            ->searchable(),
                        
                        Select::make('glass_projects')
                            ->label('Projekti "Stiklokonstrukcijas" lapā')
                            ->multiple()
                            ->options(Project::all()->pluck('title_lv', 'id'))
                            ->searchable(),
                    ]),
            ])
            ->statePath('data');
    } 

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Saglabāt')
                ->submit('save'),
        ];
    }

    public function save(): void
    {
        $data = $this->form->getState();

        // Reset all
        Project::query()->update([
            'show_on_construction' => false,
            'show_on_glass' => false
        ]);

        // Update Construction
        if (!empty($data['construction_projects'])) {
            Project::whereIn('id', $data['construction_projects'])
                ->update(['show_on_construction' => true]);
        }

        // Update Glass
        if (!empty($data['glass_projects'])) {
            Project::whereIn('id', $data['glass_projects'])
                ->update(['show_on_glass' => true]);
        }

        Notification::make()
            ->success()
            ->title('Iestatījumi saglabāti')
            ->send();
    }
}
