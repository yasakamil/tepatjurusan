<?php

namespace App\Filament\Resources\Payments\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;

class PaymentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\Select::make('account_registration_id')
                ->relationship('accountRegistration', 'email')
                ->required(),

            Forms\Components\Select::make('event_id')
                ->relationship('event', 'title')
                ->required(),

            Forms\Components\TextInput::make('midtrans_order_id')->required(),
            Forms\Components\TextInput::make('payment_type'),
            Forms\Components\TextInput::make('gross_amount')->numeric()->required(),

            Forms\Components\Select::make('transaction_status')
                ->options([
                    'pending' => 'Pending',
                    'settlement' => 'Settlement',
                    'capture' => 'Capture',
                    'deny' => 'Deny',
                    'cancel' => 'Cancel',
                    'expire' => 'Expire',
                ])
                ->required(),
        ]);
    }
}
