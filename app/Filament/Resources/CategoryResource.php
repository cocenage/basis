<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Models\Category;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Forms\Set;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    public static function getNavigationGroup(): string
    {
        return 'Продукт';
    }

    protected static ?string $navigationLabel = 'Категория продукта';

    protected static ?string $modelLabel = 'Категория';

    protected static ?string $pluralModelLabel = 'Категории';

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
                                        ->label('Название категории')
                                        ->maxLength(255)
                                        ->live(onBlur: true)
                                        ->afterStateUpdated(fn(string $operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null)
                                        ->required(),
                                    TextInput::make('slug')
                                        ->maxLength(255)
                                        ->disabled()
                                        ->dehydrated()
                                        ->unique(Category::class, 'slug', ignoreRecord: true)
                                        ->required(),
                                ]),
                            Textarea::make('description')
                                ->label('Описание категории')
                                ->placeholder('надо?')
                                ->required(),
                                FileUpload::make('image')
                                ->label('Изображение категории')
                                ->image()
                                ->imageEditor()
                                ->directory('category')
                                ->required(),
                        ]),

                    ])->columnSpanFull(),
                ])->columnSpan(2),
                Group::make()->schema([
                    Section::make('Статус категории')->schema([
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
                    ->label('Название категории')
                    ->sortable()
                    ->searchable(),
                IconColumn::make('is_active')
                    ->label('Состояние категории')
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return [
            'name',
        ];
    }
}
