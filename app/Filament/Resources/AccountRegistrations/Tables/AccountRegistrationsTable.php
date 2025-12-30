<?php

namespace App\Filament\Resources\AccountRegistrations\Tables;

use Filament\Tables;
use Filament\Tables\Table;

class AccountRegistrationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama Lengkap')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('email')
                    ->searchable(),

                Tables\Columns\TextColumn::make('no_telfon')
                    ->label('No Telepon'),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->sortable(),
            ]);
    }
}
