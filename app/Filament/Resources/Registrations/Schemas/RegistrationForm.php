<?php

namespace App\Filament\Resources\Registrations\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;
use App\Models\University;
use App\Models\Major;

class RegistrationForm
{
    public static function configure(Schema $schema): Schema
    {
        // --- LOGIC LOOPING PILIHAN KAMPUS (1-5) ---
        $pilihanKampusSchema = [];

        for ($i = 1; $i <= 5; $i++) {
            $pilihanKampusSchema[] = Section::make("Pilihan Studi $i")
                ->compact()
                ->schema([
                    Grid::make(2)
                        ->schema([
                            // KIRI: UNIVERSITAS
                            Select::make("universitas_$i")
                                ->label("Universitas $i")
                                ->placeholder('Pilih Universitas')
                                ->options(University::query()->pluck('university_name', 'id')) // Ambil Nama
                                ->searchable()
                                ->preload()
                                ->required($i <= 3), // Wajib cuma 1-3

                            // KANAN: JURUSAN
                            Select::make("jurusan_$i")
                                ->label("Jurusan / Prodi $i")
                                ->placeholder('Pilih Jurusan')
                                ->options(Major::query()->pluck('major_name', 'id')) // Ambil Nama
                                ->searchable()
                                ->preload()
                                ->required($i <= 3),
                        ]),
                ]);
        }
        // ------------------------------------------

        return $schema->schema([
            
            // BAGIAN 1: DATA DIRI
            Section::make('Data Diri Peserta')
                ->schema([
                    TextInput::make('nama_lengkap')->required(),
                    TextInput::make('tempat_lahir')->required(),
                    DatePicker::make('tanggal_lahir')->required(),
                    
                    Grid::make(2)->schema([
                        TextInput::make('no_hp')->label('No HP / WA')->required(),
                        TextInput::make('no_hp_orangtua')->label('No HP Orang Tua')->required(),
                    ]),
                    
                    TextInput::make('email')->email()->required(),
                    Textarea::make('alamat_domisili')->columnSpanFull(),
                ]),

            // BAGIAN 2: ASAL SEKOLAH
            Section::make('Asal Sekolah')
                ->schema([
                    TextInput::make('asal_sekolah')->required(),
                    Select::make('kelas_jenjang')
                        ->options([
                            '12 SMA/SMK' => 'Kelas 12 SMA/SMK',
                            'Gap Year'   => 'Alumni / Gap Year',
                            'Lainnya'    => 'Lainnya',
                        ])
                        ->required(),
                ])->columns(2),

            // BAGIAN 3: RENCANA STUDI (Dropdown Univ & Jurusan)
            Section::make('Rencana Studi (Pilihan Kampus)')
                ->description('Urutan prioritas pilihan kampus dan jurusan')
                ->schema($pilihanKampusSchema) // Masukin hasil looping tadi
                ->collapsible(),
        ]);
    }
}