<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ItemResource\Pages;
use App\Filament\Resources\ItemResource\RelationManagers;
use App\Models\Item;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ItemResource extends Resource
{
    protected static ?string $model = Item::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    
    protected static ?string $navigationLabel = 'Жазбалар';
    
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('Негізгі ақпарат')
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
                            ]),
                    ])
                    ->columnSpan(['lg' => 2]),
                
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\Section::make('Қатынастар')
                            ->schema([
                                Forms\Components\Select::make('category_id')
                                    ->label('Санат')
                                    ->relationship('category', 'title')
                                    ->required()
                                    ->preload()
                                    ->searchable(),
                            ]),
                        
                        Forms\Components\Section::make('Сурет')
                            ->schema([
                                Forms\Components\FileUpload::make('image')
                                    ->label('Сурет')
                                    ->image()
                                    ->disk('public')
                                    ->directory('items')
                            ]),
                    ])
                    ->columnSpan(['lg' => 1]),
            ])
            ->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Тақырыбы')
                    ->searchable()
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('category.title')
                    ->label('Санат')
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
                Tables\Filters\SelectFilter::make('category_id')
                    ->label('Санат')
                    ->relationship('category', 'title')
                    ->searchable()
                    ->preload(),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListItems::route('/'),
            'create' => Pages\CreateItem::route('/create'),
            'edit' => Pages\EditItem::route('/{record}/edit'),
        ];
    }
}
