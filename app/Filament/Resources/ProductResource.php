<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-document';

    public static function getNavigationGroup(): string
    {
        return 'Продукт';
    }

    protected static ?string $navigationLabel = 'Продукт';

    protected static ?string $modelLabel = 'Продукт';

    protected static ?string $pluralModelLabel = 'Продукты';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Tabs::make('Основная информация')->tabs([
                        Tabs\Tab::make('Основная информация')->schema([
                            Grid::make(2)
                                ->columns([
                                    'sm' => 1,
                                    'xl' => 2,
                                ])
                                ->schema([
                                    TextInput::make('name')
                                        ->label('Название продукта')
                                        ->maxLength(255)
                                        ->live(onBlur: true)
                                        ->afterStateUpdated(fn(string $operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null)
                                        ->required(),
                                    TextInput::make('slug')
                                        ->maxLength(255)
                                        ->disabled()
                                        ->dehydrated()
                                        ->unique(Product::class, 'slug', ignoreRecord: true)
                                        ->required(),
                                ]),
                            Textarea::make('description')
                                ->label('Описание продукта')
                                ->required(),
                            FileUpload::make('image')
                                ->label('Изображение продукта')
                                ->image()
                                ->imageEditor()
                                ->directory('product')
                                ->required(),
                        ]),
                        Tabs\Tab::make('Meta-поля')->schema([
                            TextInput::make('meta_title')
                                ->label('Meta-заголовок')
                                ->required(),
                            TextInput::make('meta_keywords')
                                ->label('Meta-ключевые слова')
                                ->required(),
                            Textarea::make('meta_description')
                                ->rows(5)
                                ->required(),
                        ]),
                    ])->columnSpanFull(),
                ])->columnSpan(2),
                Group::make()->schema([
                    Section::make()->schema([
                        Select::make('category_id')
                            ->preload()
                            ->multiple()
                            ->searchable()
                            ->placeholder('Выбрать категорию')
                            ->label('Выберите категорию')
                            ->relationship('category', 'name')
                            ->required(),
                    ])->columnSpanFull(),
                    Section::make('Статус продукта')->schema([
                        Toggle::make('is_active')
                            ->default(true)
                            ->label('Отображать на сайте'),
                    ])->columnSpanFull(),
                ])->columnSpan(1)
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Название продукта')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('category.name')
                    ->label('Категория продукта')
                    ->sortable()
                    ->searchable(),
                IconColumn::make('is_active')
                    ->label('Состояние продукта')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return [
            'name',
        ];
    }
}
