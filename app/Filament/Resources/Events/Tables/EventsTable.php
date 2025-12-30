<?php

namespace App\Filament\Resources\Events\Tables;

use Filament\Tables;
use Filament\Tables\Table;

class EventsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\BadgeColumn::make('status')
                    ->colors([
                        'gray' => 'draft',
                        'success' => 'published',
                        'danger' => 'closed',
                    ]),

                Tables\Columns\TextColumn::make('start_datetime')
                    ->dateTime()
                    ->sortable(),

                Tables\Columns\TextColumn::make('price')
                    ->money('IDR'),

                Tables\Columns\TextColumn::make('quota'),
            ]);
    }
}
