<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KomentarResource\Pages;
use App\Models\Komentar;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class KomentarResource extends Resource
{
    protected static ?string $model = Komentar::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-oval-left-ellipsis';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->label('Nama Komentar')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Masukkan nama komentar')
                    ->helperText('Maksimal 255 Karakter'),
                Select::make('news_id')
                    ->label('Judul Berita')
                    ->relationship('news', 'judul')
                    ->required()
                    ->searchable()
                    ->preload(),
                TextInput::make('isi')
                    ->label('Isi Komentar')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Masukkan isi komentar')
                    ->helperText('Maksimal 255 Karakter'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama Komentar')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('news.judul')
                    ->label('Judul Berita')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('isi')
                    ->label('Isi Komentar')
                    ->limit(50)
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
            'index' => Pages\ListKomentars::route('/'),
            'create' => Pages\CreateKomentar::route('/create'),
            'edit' => Pages\EditKomentar::route('/{record}/edit'),
        ];
    }
}
