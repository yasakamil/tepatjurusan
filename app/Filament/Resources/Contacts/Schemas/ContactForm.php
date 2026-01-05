<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Detail Pesan')
                    ->schema([
                        // Baris 1
                        Grid::make(2)->schema([
                            TextInput::make('first_name')
                                ->label('Nama Depan')
                                ->disabled(),
                            
                            TextInput::make('last_name')
                                ->label('Nama Belakang')
                                ->disabled(),
                        ]),

                        // Baris 2
                        Grid::make(2)->schema([
                            TextInput::make('email')
                                ->label('Email Pengirim')
                                ->prefixIcon('heroicon-m-envelope')
                                ->disabled(),

                            TextInput::make('subject')
                                ->label('Subjek')
                                ->disabled(),
                        ]),

                        // Baris 3
                        Textarea::make('message')
                            ->label('Isi Pesan')
                            ->rows(6)
                            ->columnSpanFull()
                            ->disabled(),
                    ])
            ]);
    }
}