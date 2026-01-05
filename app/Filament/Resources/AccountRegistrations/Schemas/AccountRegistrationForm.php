<?php

namespace App\Filament\Resources\AccountRegistrations\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Hash;

class AccountRegistrationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\TextInput::make('nama')
                ->label('Nama Lengkap')
                ->required()
                ->maxLength(255)
                ->columnSpan(1),

            Forms\Components\TextInput::make('email')
                ->email()
                ->required()
                ->unique(ignoreRecord: true)
                ->columnSpan(1),

            Forms\Components\TextInput::make('no_telfon')
                ->label('No Telepon')
                ->tel()
                ->required()
                ->columnSpan(1),

            Forms\Components\Select::make('status')
                ->label('Status')
                ->options([
                    'pending' => 'Pending',
                    'approved' => 'Approved',
                ])
                ->required()
                ->default('pending')
                -> disabled()
                ->columnSpan(1),

            Forms\Components\TextInput::make('password')
                ->password()
                ->required(fn ($context) => $context === 'create')
                ->dehydrateStateUsing(fn ($state) => filled($state) ? Hash::make($state) : null)
                ->dehydrated(fn ($state) => filled($state))
                ->hiddenOn('edit')
                ->columnSpan(2),

            Forms\Components\DateTimePicker::make('created_at')
                ->label('Registered At')
                ->disabled()
                ->displayFormat('d M Y H:i')
                ->hiddenOn('create')
                ->columnSpan(2),

            Forms\Components\Repeater::make('events')
                ->relationship('events')
                ->label('Events & Status Pembayaran')
                ->schema([
                    Forms\Components\TextInput::make('slug') // Ubah ini
                        ->label('Nama Event')
                        ->disabled()
                        ->columnSpan(1),
                    
                    Forms\Components\Select::make('payment_status')
                        ->label('Status Pembayaran')
                        ->options([
                            'pending' => 'Pending',
                            'paid' => 'Paid',
                            'failed' => 'Failed',
                        ])
                        ->disabled()
                        ->default('pending'),

                    Forms\Components\DateTimePicker::make('paid_at')
                        ->label('Tanggal Bayar')
                        ->disabled()
                        ->displayFormat('d M Y H:i'),
                ])
                ->columns(4)
                ->columnSpanFull(),
            ])
            ->columns(2);
        }
    }