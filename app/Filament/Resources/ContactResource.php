<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Filament\Resources\ContactResource\RelationManagers;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Validation\ValidationException;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationGroup(): string
    {
        return 'Контент';
    }

    protected static ?string $navigationLabel = 'Контакты';

    protected static ?string $modelLabel = 'Контакты';

    protected static ?string $pluralModelLabel = 'Контакты';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('')->schema([
                    TextInput::make('phone')
                        ->label('Номер телефон')
                        ->required(),
                    TextInput::make('phone_a')
                        ->label('Ссылка на номер телефона')
                        ->required(),
                    TextInput::make('mail')
                        ->label('Почта')
                        ->required(),
                    Repeater::make('name')->label('Социальные сети')->schema([
                        TextInput::make('1')
                            ->label('Название')
                            ->required(),
                        TextInput::make('2')
                            ->label('Ссылка')
                            ->required(),
                    ])->columnSpanFull(),
                    ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('custom')
                    ->label('Редактирование контактов')
                    ->getStateUsing(fn($record) => 'Контакты')
                    ->sortable(false),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([])
            ->paginated(false);
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
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }

    public static function mutateFormDataBeforeCreate(array $data): array
    {
        if (Contact::exists()) {
            throw ValidationException::withMessages([
                'global' => 'Запись контактов уже существуют. Вы можете редактировать существующую запись.',
            ]);
        }
        return $data;
    }
}
