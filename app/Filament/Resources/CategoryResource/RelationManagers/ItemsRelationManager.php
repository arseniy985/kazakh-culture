<?php

namespace App\Filament\Resources\CategoryResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ItemsRelationManager extends RelationManager
{
    protected static string $relationship = 'items';

    protected static ?string $recordTitleAttribute = 'title';
    
    protected static ?string $title = 'Жазбалар';
    
    protected static ?string $label = 'жазба';
    
    protected static ?string $pluralLabel = 'жазбалар';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Тақырыбы')
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
                                    $set('slug', Str::slug($get('title')));
                                })
                        ])
                        ->alignEnd(),
                    ]),
                
                Forms\Components\RichEditor::make('content')
                    ->label('Мазмұны')
                    ->required()
                    ->columnSpanFull(),
                
                Forms\Components\FileUpload::make('image')
                    ->label('Сурет')
                    ->image()
                    ->disk('public')
                    ->directory('items')
                    ->columnSpanFull(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Тақырыбы')
                    ->searchable()
                    ->sortable(),
                
                Tables\Columns\ImageColumn::make('image')
                    ->label('Сурет'),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Құрылған')
                    ->dateTime('d.m.Y H:i')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->label('Құру'),
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
} 