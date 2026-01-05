<?php

namespace App\Filament\Resources\Articles\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

// Namespace Actions sesuai request kamu (Filament v4/Bleeding Edge)
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;

class ArticlesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // 1. Thumbnail (Image)
                ImageColumn::make('thumbnail')
                    ->label('Cover')
                    ->disk('public') 
                    ->circular(), // Opsional: biar bulat

                // 2. Title (Searchable & Sortable)
                TextColumn::make('title')
                    ->searchable()
                    ->sortable()
                    ->weight('bold') // Biar tebal dikit
                    ->limit(50), // Biar gak kepanjangan kalo judulnya panjang

                // 3. Slug (Disembunyikan default biar gak menuhin)
                TextColumn::make('slug')
                    ->icon('heroicon-m-link')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                // 4. Published At (Format Tanggal)
                TextColumn::make('published_at')
                    ->label('Tanggal Publish')
                    ->date('d M Y') // Format: 31 Dec 2025
                    ->sortable()
                    ->badge() // Biar ada background warnanya dikit
                    ->color('success'),

                // 5. Created At (Info tambahan)
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                // Nanti bisa ditambahin filter tanggal disini kalo butuh
            ])
            ->actions([ // Ganti recordActions jadi actions (Standar Filament)
                EditAction::make(),
            ])
            ->bulkActions([ // Ganti toolbarActions jadi bulkActions (Standar Filament)
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}