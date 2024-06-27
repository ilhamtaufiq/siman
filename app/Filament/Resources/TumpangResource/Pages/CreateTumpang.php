<?php

namespace App\Filament\Resources\TumpangResource\Pages;

use App\Filament\Resources\TumpangResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;


class CreateTumpang extends CreateRecord
{
    protected static string $resource = TumpangResource::class;
    use CreateRecord\Concerns\HasWizard;
    protected function getSteps(): array
    {
        return [
            Step::make('Makam')
            ->description('Pilih Makam')
            ->schema([
                Forms\Components\Select::make('makam_id')
        ->label('Makam')
        ->relationship('makam', 'nama')
        ->searchable()
        ->required()
            ]),
        Step::make('Makam Baru')
            ->description('Tambah Makam Baru')
            ->schema([
                Forms\Components\TextInput::make('nama')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('nik')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('tempat_lahir')
                ->required()
                ->maxLength(255),
            Forms\Components\DatePicker::make('tanggal_lahir')
                ->required(),
                Forms\Components\Select::make('jenis_kelamin')
                ->options([
                    'laki-laki' => 'Laki-Laki',
                    'perempuan' => 'Perempuan',
                ])
                ->required(),
                Forms\Components\Select::make('agama')
                ->options([
                    'islam' => 'Islam',
                    'kristen' => 'Kristen',
                    'katolik' => 'Katolik',
                    'hindu' => 'Hindu',
                    'buddha' => 'Buddha',
                    'khonghucu' => 'khonghucu',
                ])
                ->required(),
            Forms\Components\TextInput::make('pekerjaan')
                ->maxLength(255),
            Forms\Components\Textarea::make('alamat')
                ->required()
                ->columnSpanFull(),
            Forms\Components\TextInput::make('provinsi')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('kabupaten')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('kecamatan')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('kelurahan')
                ->required()
                ->maxLength(255),

            ]),
        Step::make('Ahli Waris')
            ->description('Ahli Waris Makam')
            ->schema([
                Forms\Components\Select::make('ahliwaris_id')
                ->label('Ahli Waris')
                ->relationship('ahliwaris', 'nama')
                ->searchable()
                ->required(),
            Forms\Components\TextInput::make('hubungan')
                ->maxLength(255),
            Forms\Components\DatePicker::make('tanggal_meninggal')
                ->required(),
            Forms\Components\DatePicker::make('tanggal_dimakamkan')
                ->required(),
                Forms\Components\Select::make('tpu_id')
                ->relationship('tpu', 'nama_tpu')
                ->searchable()
                ->required(),
            Forms\Components\TextInput::make('blok')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('nomor')
                ->required()
                ->numeric(),
            Forms\Components\TextInput::make('luas')
                ->required()
                ->numeric(),
                Forms\Components\Section::make('foto')
                ->schema([
                    SpatieMediaLibraryFileUpload::make('media')->hiddenLabel()
                        ->collection('tumpang/foto')
                        ->multiple()
                        ->reorderable()
                        ->required(),
                ])
                ->collapsible(),
            Forms\Components\Textarea::make('catatan')
                ->columnSpanFull(),
            ]),
        ];
    }
}
