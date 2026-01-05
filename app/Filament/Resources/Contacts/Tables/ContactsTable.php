<?php

namespace App\Filament\Resources\Contacts\Tables;

use Filament\Tables\Table;
// --- IMPORT SEMUA INI BIAR GARIS MERAH HILANG ---
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\ViewAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
// ------------------------------------------------

class ContactsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('first_name')
                    ->label('Nama')
                    ->formatStateUsing(fn ($record) => $record->first_name . ' ' . $record->last_name)
                    ->sortable()
                    ->searchable(['first_name', 'last_name']),

                TextColumn::make('email')
                    ->icon('heroicon-m-envelope')
                    ->searchable(),

                TextColumn::make('subject')
                    ->badge()
                    ->color('info')
                    ->searchable(),

                TextColumn::make('created_at')
                    ->label('Diterima')
                    ->dateTime()
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->actions([
                // Pake ViewAction biar cuma bisa liat, bukan edit
                ViewAction::make(), 
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}