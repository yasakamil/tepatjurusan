<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\TextInput::make('title')
                ->required()
                ->live(onBlur: true)
                ->afterStateUpdated(fn ($state, callable $set) =>
                    $set('slug', Str::slug($state))
                ),

            Forms\Components\TextInput::make('slug')
                ->required()
                ->unique(ignoreRecord: true),

            Forms\Components\Textarea::make('description')
                ->rows(4),

            Forms\Components\FileUpload::make('banner_media')
                ->label('Banner Image / Video')
                ->directory('events'),

            Forms\Components\Select::make('location_type')
                ->options([
                    'online' => 'Online',
                    'offline' => 'Offline',
                ])
                ->required(),

            Forms\Components\TextInput::make('location_detail')
                ->label('Location Detail / Link'),

            Forms\Components\DateTimePicker::make('start_datetime')
                ->required(),

            Forms\Components\DateTimePicker::make('end_datetime')
                ->required(),

            Forms\Components\TextInput::make('price')
                ->numeric()
                ->prefix('Rp'),

            Forms\Components\TextInput::make('quota')
                ->numeric()
                ->required(),

            Forms\Components\Select::make('status')
                ->options([
                    'draft' => 'Draft',
                    'published' => 'Published',
                    'closed' => 'Closed',
                ])
                ->required(),
        ]);
    }
}
