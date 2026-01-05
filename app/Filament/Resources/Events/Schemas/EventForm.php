<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Get;
use Filament\Forms\Components\FileUpload;

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
                ->disk('public')
                ->directory('events')
                ->visibility('public'),

            Forms\Components\Select::make('location_type')
                ->options([
                    'online' => 'Online',
                    'offline' => 'Offline',
                ])
                ->required(),

            Forms\Components\TextInput::make('location_detail')
                ->label('Location Detail / Link'),

            Forms\Components\TextInput::make('link_course')
                ->label('Course Link')
                ->url()
                ->placeholder('https://course.com')
                ->helperText('Link akses course / materi event')
                ->nullable(),


            Forms\Components\DateTimePicker::make('start_datetime')
                ->required(),

            Forms\Components\DateTimePicker::make('end_datetime')
                ->required(),

            Forms\Components\TextInput::make('price')
                ->numeric()
                ->prefix('Rp'),

            Toggle::make('has_discount')
                ->label('Aktifkan Diskon?')
                ->onColor('success')
                ->offColor('danger')
                ->default(fn ($record) => $record?->discount_price !== null)
                ->live()
                ->dehydrated(false),

            Section::make('Discount Settings')
                ->schema([
                    TextInput::make('discount_price')
                            ->label('Discounted Price')
                            ->numeric()
                            ->prefix('IDR')
                            ->lt('price')
                            ->required(fn ($get) => $get('has_discount')), 

                        DateTimePicker::make('discount_end_time')
                            ->label('Discount Ends At')
                            ->native(false)
                            ->required(fn ($get) => $get('has_discount')),
                        // ...
                        ])
                        ->columns(2)
                        ->visible(fn ($get) => $get('has_discount')),

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
