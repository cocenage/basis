<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HeadingResource\Pages;
use App\Models\Heading;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Repeater;
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

class HeadingResource extends Resource
{
    protected static ?string $model = Heading::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationGroup(): string
    {
        return 'Контент';
    }

    protected static ?string $navigationLabel = 'Блог';

    protected static ?string $modelLabel = 'Блог';

    protected static ?string $pluralModelLabel = 'Блог';

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
                                        ->label('Название записи')
                                        ->maxLength(255)
                                        ->live(onBlur: true)
                                        ->afterStateUpdated(fn(string $operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null)
                                        ->required(),
                                    TextInput::make('slug')
                                        ->maxLength(255)
                                        ->disabled()
                                        ->dehydrated()
                                        ->unique(Heading::class, 'slug', ignoreRecord: true)
                                        ->required(),
                                ]),
                            FileUpload::make('image')
                                ->label('Изображение записи')
                                ->maxSize(50 * 1024) // 50MB лимит
                                ->imageEditor()
                                ->directory('news')
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
                    Section::make('Контент')->schema([
                        Repeater::make('description')->label('Описание записи')->schema([
                            TextInput::make('h1')
                                ->label('Заголовок'),
                            Textarea::make('p')
                                ->label('Описание'),
                        ])->columnSpanFull(),
                    ])
                ])->columnSpan(2),
                Group::make()->schema([
                    Section::make('Статус записи')->schema([
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
                    ->label('Название записи')
                    ->sortable()
                    ->searchable(),
                IconColumn::make('is_active')
                    ->label('Состояние записи')
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
            'index' => Pages\ListHeadings::route('/'),
            'create' => Pages\CreateHeading::route('/create'),
            'edit' => Pages\EditHeading::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return [
            'name',
        ];
    }
}
