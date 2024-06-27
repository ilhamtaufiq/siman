<?php

namespace App\Livewire\AhliWaris;

use App\Models\AhliWaris;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;
use Illuminate\Contracts\View\View;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;


class CreateAhliWaris extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
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
            Forms\Components\TextInput::make('telepon')
                ->tel()
                ->maxLength(255),
            Forms\Components\TextInput::make('email')
                ->email()
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
                Forms\Components\Section::make('foto')
                ->schema([
                    SpatieMediaLibraryFileUpload::make('media')->hiddenLabel()
                        ->collection('waris/foto')
                        ->multiple()
                        ->reorderable(),
                ])
                ->collapsible(),
            ])
            ->statePath('data');

    }

    public function create(): void
    {
        AhliWaris::create($this->form->getState());

    }

    public function render(): View
    {
        return view('livewire.ahli-waris.create-ahli-waris');
    }
}
