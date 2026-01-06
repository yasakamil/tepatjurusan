<?php

namespace App\Filament\Resources\Universities\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;

class UniversityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            Forms\Components\TextInput::make('university_name')
                ->label('University Name')
                ->required()
                ->maxLength(255),
        ]);
    }
}
