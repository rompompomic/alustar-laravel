<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Repeater;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Schema;
use Filament\Actions;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Projekti';
    protected static ?int $navigationSort = 1;
    protected static ?string $pluralModelLabel = 'Projekti';
    protected static ?string $modelLabel = 'Projekts';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(1)->schema([
                    Section::make('Pamatinformācija (General Info)')
                        ->schema([
                            Grid::make(2)->schema([
                                TextInput::make('title_lv')
                                    ->label('Nosaukums (LV)')
                                    ->required()
                                    ->maxLength(255)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                                TextInput::make('title_ru')
                                    ->label('Nosaukums (RU)')
                                    ->maxLength(255),
                            ]),

                            Grid::make(3)->schema([
                                TextInput::make('year')
                                    ->label('Gads / Year')
                                    ->maxLength(4),
                                TextInput::make('area')
                                    ->label('Platība / Area')
                                    ->maxLength(255),
                                TextInput::make('slug')
                                    ->required()
                                    ->unique(ignoreRecord: true)
                                    ->maxLength(255),
                            ]),

                            // Location
                            Grid::make(2)->schema([
                                TextInput::make('location_lv')
                                    ->label('Atrašanās vieta (LV)')
                                    ->maxLength(255),
                                TextInput::make('location_ru')
                                    ->label('Atrašanās vieta (RU)')
                                    ->maxLength(255),
                            ]),

                             // Team
                            Grid::make(2)->schema([
                                TextInput::make('team_lv')
                                    ->label('Komanda / Team (LV)')
                                    ->maxLength(255),
                                TextInput::make('team_ru')
                                    ->label('Komanda / Team (RU)')
                                    ->maxLength(255),
                            ]),

                            Section::make('Tagi / Tags')
                                ->schema([
                                    Grid::make(3)->schema([
                                        TextInput::make('tag_1_lv')->label('Tag 1 (Top) - LV'),
                                        TextInput::make('tag_2_lv')->label('Tag 2 - LV'),
                                        TextInput::make('tag_3_lv')->label('Tag 3 - LV'),
                                    ]),
                                    Grid::make(3)->schema([
                                        TextInput::make('tag_1_ru')->label('Tag 1 (Top) - RU'),
                                        TextInput::make('tag_2_ru')->label('Tag 2 - RU'),
                                        TextInput::make('tag_3_ru')->label('Tag 3 - RU'),
                                    ]),
                            ]),
                            
                            FileUpload::make('cover_image')
                                ->label('Vāka attēls (Cover Image)')
                                ->image()
                                ->directory('projects/covers')
                                ->visibility('public')
                                ->required(),

                            FileUpload::make('gallery_images')
                                ->label('Galerija (Gallery)')
                                ->image()
                                ->multiple()
                                ->reorderable()
                                ->directory('projects/gallery')
                                ->visibility('public')
                                ->columnSpanFull(),
                                
                             Section::make('Saraksti (Lists)')
                                ->schema([
                                    Repeater::make('scope')
                                        ->label('Darbu apjoms (Scope)')
                                        ->schema([
                                            TextInput::make('item_lv')->label('LV')->required(),
                                            TextInput::make('item_ru')->label('RU'),
                                        ])->columns(2),
                                    
                                    Repeater::make('technologies')
                                        ->label('Tehnoloģijas (Technologies)')
                                        ->schema([
                                            TextInput::make('item_lv')->label('LV')->required(),
                                            TextInput::make('item_ru')->label('RU'),
                                        ])->columns(2),
                                    
                                    Repeater::make('achievements')
                                        ->label('Sasniegumi (Achievements)')
                                        ->schema([
                                            TextInput::make('item_lv')->label('LV')->required(),
                                            TextInput::make('item_ru')->label('RU'),
                                        ])->columns(2), 
                                ])->collapsed(),
                        ]),

                    Tabs::make('Lokācijas / Valodas')
                        ->tabs([
                            Tabs\Tab::make('Latviešu (LV)')
                                ->icon('heroicon-m-language')
                                ->schema([
                                    Section::make('Apraksts / Description')
                                        ->schema([
                                            Textarea::make('challenge_lv')->label('Izaicinājums / Challenge'),
                                            Textarea::make('solution_lv')->label('Risinājums / Solution'),
                                            Textarea::make('result_lv')->label('Rezultāts / Result'),
                                        ]),

                                    Section::make('Papildus apraksts (Content)')
                                        ->schema([
                                            RichEditor::make('content_lv')
                                                ->label('')
                                                ->columnSpanFull(),
                                        ]),

                                    Section::make('SEO (LV)')
                                        ->schema([
                                            TextInput::make('seo_title_lv')->label('Meta Title'),
                                            Textarea::make('seo_description_lv')->label('Meta Description'),
                                        ])->collapsed(),
                                ]),
                                
                            Tabs\Tab::make('Krievu (RU)')
                                ->icon('heroicon-m-language')
                                ->schema([
                                    Section::make('Apraksts RU / Description RU')
                                        ->schema([
                                            Textarea::make('challenge_ru')->label('Izaicinājums (RU)'),
                                            Textarea::make('solution_ru')->label('Risinājums (RU)'),
                                            Textarea::make('result_ru')->label('Rezultāts (RU)'),
                                        ]),

                                    Section::make('Papildus apraksts RU (Content)')
                                        ->schema([
                                            RichEditor::make('content_ru')
                                                ->label('')
                                                ->columnSpanFull(),
                                        ]),

                                    Section::make('SEO (RU)')
                                        ->schema([
                                            TextInput::make('seo_title_ru')->label('Meta Title (RU)'),
                                            Textarea::make('seo_description_ru')->label('Meta Description (RU)'),
                                        ])->collapsed(),
                                ]),
                        ]),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('cover_image')
                    ->label('Attēls'),
                Tables\Columns\TextColumn::make('title_lv')
                    ->label('Nosaukums')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('year')
                    ->label('Gads')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Actions\EditAction::make(),
            ])
            ->bulkActions([
                Actions\BulkActionGroup::make([
                    Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
