<?php

namespace App\Filament\Resources\Majors\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;

class MajorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            Forms\Components\TextInput::make('major_name')
                ->label('Major Name')
                ->required()
                ->maxLength(255),
        ]);
    }
}
