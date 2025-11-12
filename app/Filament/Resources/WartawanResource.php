<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WartawanResource\Pages;
use App\Models\Wartawan;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class WartawanResource extends Resource
{
    protected static ?string $model = Wartawan::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->required()
                    ->maxLength(255)
                    ->label('Nama')
                    ->placeholder('Masukkan nama wartawan')
                    ->helperText('Maksimal 255 Karakter'),
                TextInput::make('email')
                    ->required()
                    ->maxLength(255)
                    ->email()
                    ->label('Email')
                    ->placeholder('Masukkan email wartawan')
                    ->helperText('Maksimal 255 Karakter'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns(components: [
                TextColumn::make('nama')
                    ->label('Nama')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListWartawans::route('/'),
            'create' => Pages\CreateWartawan::route('/create'),
            'edit' => Pages\EditWartawan::route('/{record}/edit'),
        ];
    }
}
