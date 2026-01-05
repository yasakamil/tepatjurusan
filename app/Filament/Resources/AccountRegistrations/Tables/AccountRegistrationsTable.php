<?php

namespace App\Filament\Resources\AccountRegistrations\Tables;

use Filament\Tables;
use Filament\Tables\Table;
use App\Models\AccountRegistration;

class AccountRegistrationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
                ->query(
        fn () => AccountRegistration::query()->with('events')
    )

            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama Lengkap')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('email')
                    ->searchable(),

                Tables\Columns\TextColumn::make('no_telfon')
                    ->label('No Telepon'),

                Tables\Columns\BadgeColumn::make('status')
                    ->colors([
                        'success' => 'active',
                        'warning' => 'pending',
                        'danger'  => 'inactive',
                    ]),

                /**
                 * EVENT + STATUS PEMBAYARAN (PIVOT)
                 */
                Tables\Columns\TextColumn::make('event_payment_status')
                    ->label('Events')
                    ->state(function ($record) {
                        return $record->events->map(function ($event) {
                            return "Event {$event->id} — {$event->pivot->payment_status}";
                        })->implode("\n");
                    })
                    ->listWithLineBreaks()
                    ->wrap(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Registered At')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])

            ->defaultSort('created_at', 'desc')

            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'active' => 'Active',
                        'pending' => 'Pending',
                        'inactive' => 'Inactive',
                    ]),
                ]);

    }
}
