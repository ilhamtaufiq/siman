<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TumpangResource\Pages;
use App\Filament\Resources\TumpangResource\RelationManagers;
use App\Models\Tumpang;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Wizard;

class TumpangResource extends Resource
{
    protected static ?string $model = Tumpang::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nik')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tempat_lahir')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_lahir')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jenis_kelamin'),
                Tables\Columns\TextColumn::make('agama'),
                Tables\Columns\TextColumn::make('pekerjaan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('provinsi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kabupaten')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kecamatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kelurahan')
                    ->searchable(),
                    Tables\Columns\TextColumn::make('ahliwaris.nama')
                    ->label('Ahli Waris')
                    ->sortable(),
                Tables\Columns\TextColumn::make('hubungan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_meninggal')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_dimakamkan')
                    ->date()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('tpu.nama_tpu')
                    ->label('TPU')
                    ->sortable(),
                Tables\Columns\TextColumn::make('blok')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nomor')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('luas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('foto')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListTumpangs::route('/'),
            'create' => Pages\CreateTumpang::route('/create'),
            'edit' => Pages\EditTumpang::route('/{record}/edit'),
        ];
    }
}
