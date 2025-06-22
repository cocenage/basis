<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConnectionResource\Pages;
use App\Filament\Resources\ConnectionResource\RelationManagers;
use App\Models\Connection;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ConnectionResource extends Resource
{
    protected static ?string $model = Connection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationGroup(): string
    {
        return 'Обратная связь';
    }

    protected static ?string $navigationLabel = 'Обратная связь';

    protected static ?string $modelLabel = 'Обратная связь';

    protected static ?string $pluralModelLabel = 'Обратная связь';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('phone'),
                TextInput::make('email'),
                Textarea::make('message')->rows(5),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('phone')
                    ->label('Телефон')
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Почта')    ->sortable(),
                Tables\Columns\TextColumn::make('message')->limit(50)

                    ->label('Сообщение')    ->sortable(),

                Tables\Columns\TextColumn::make('created_at')->dateTime()
                    ->label('Дата написания')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListConnections::route('/'),
            'create' => Pages\CreateConnection::route('/create'),
            'edit' => Pages\EditConnection::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return Connection::count() === 0;
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
}
