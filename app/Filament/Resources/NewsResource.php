<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Models\News;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\HtmlString;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->required()
                    ->maxLength(255)
                    ->label('Judul Berita')
                    ->placeholder('Masukkan judul berita')
                    ->helperText('Maksimal 255 Karakter'),
                TextInput::make('ringkasan')
                    ->required()
                    ->maxLength(255)
                    ->label('Ringkasan Berita')
                    ->placeholder('Masukkan ringkasan berita')
                    ->helperText('Maksimal 255 Karakter'),
                Select::make('wartawan_id')
                    ->relationship('wartawan', 'nama')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->label('Wartawan'),
                RichEditor::make('isi')
                    ->required()
                    ->columnSpanFull()
                    ->placeholder('Masukkan isi berita')
                    ->label('Isi Berita'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('wartawan.nama')
                    ->label('Nama Wartawan')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('judul')
                    ->label('Judul Berita')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('isi')
                    ->label('Isi Berita')
                    ->limit(30)
                    ->formatStateUsing(fn (string $state): HtmlString => new HtmlString($state))
                    ->sortable()
                    ->searchable(),
                TextColumn::make('ringkasan')
                    ->label('Ringkasan Berita')
                    ->limit(30)
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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
