<?php

namespace App\Filament\Resources\Registrations\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class RegistrationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            TextInput::make('nama_lengkap')->required(),
            TextInput::make('tempat_lahir')->required(),
            DatePicker::make('tanggal_lahir')->required(),

            TextInput::make('no_hp')->required(),
            TextInput::make('no_hp_orangtua')->required(),
            TextInput::make('email')->email()->required(),

            Textarea::make('alamat_domisili')->columnSpanFull(),

            TextInput::make('asal_sekolah')->required(),
            TextInput::make('kelas_jenjang')->required(),

            TextInput::make('jurusan_1')->label('Jurusan 1')->required(),
            TextInput::make('jurusan_2')->label('Jurusan 2')->required(),
            TextInput::make('jurusan_3')->label('Jurusan 3')->required(),
            TextInput::make('jurusan_4')->label('Jurusan 4'),
            TextInput::make('jurusan_5')->label('Jurusan 5'),

            TextInput::make('universitas_1')->label('Universitas 1')->required(),
            TextInput::make('universitas_2')->label('Universitas 2')->required(),
            TextInput::make('universitas_3')->label('Universitas 3')->required(),
            TextInput::make('universitas_4')->label('Universitas 4'),
            TextInput::make('universitas_5')->label('Universitas 5'),
        ]);
    }
}
