<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    protected static ?string $navigationLabel = 'Санаттар';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Негізгі ақпарат')
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Атауы')
                            ->required()
                            ->maxLength(255)
                            ->live()
                            ->afterStateUpdated(function (string $operation, $state, Forms\Set $set) {
                                $set('slug', Str::slug($state));
                            }),

                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('slug')
                                    ->label('Slug')
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(ignoreRecord: true),

                                Forms\Components\Actions::make([
                                    Forms\Components\Actions\Action::make('regenerateSlug')
                                        ->label('Жаңарту')
                                        ->icon('heroicon-m-arrow-path')
                                        ->action(function (Forms\Get $get, Forms\Set $set) {
                                            $set('slug', Str::slug($get('name')));
                                        })
                                ])
                                ->alignEnd(),
                            ]),

                        Forms\Components\Textarea::make('description')
                            ->label('Сипаттама')
                            ->columnSpanFull(),

                        Forms\Components\FileUpload::make('image')
                            ->label('Сурет')
                            ->image()
                            ->disk('public')
                            ->directory('categories')
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Атауы')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('slug')
                    ->label('Slug')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\ImageColumn::make('image')
                    ->label('Сурет'),

                Tables\Columns\TextColumn::make('items_count')
                    ->label('Жазбалар саны')
                    ->counts('items'),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Құрылған')
                    ->dateTime('d.m.Y H:i')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('Өңдеу'),
                Tables\Actions\DeleteAction::make()
                    ->label('Жою'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->label('Жою'),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\ItemsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
