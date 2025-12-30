<?php

namespace App\Filament\Resources\Payments\Tables;

use Filament\Tables;
use Filament\Tables\Table;

class PaymentsTable
{
    public static function configure(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('midtrans_order_id')->searchable(),
            Tables\Columns\TextColumn::make('accountRegistration.email')->label('Student'),
            Tables\Columns\TextColumn::make('event.title')->label('Event'),
            Tables\Columns\TextColumn::make('gross_amount')->money('IDR'),
            Tables\Columns\TextColumn::make('transaction_status')->badge(),
            Tables\Columns\TextColumn::make('created_at')->dateTime(),
        ]);
    }
}
