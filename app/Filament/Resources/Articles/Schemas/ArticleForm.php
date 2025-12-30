<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DatePicker;
use Illuminate\Support\Str;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([ 
                Section::make('Article Content')
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),

                        TextInput::make('slug')
                            ->required()
                            ->disabled()
                            ->dehydrated(),

                        FileUpload::make('thumbnail')
                            ->image()
                            ->directory('articles')
                            ->disk('public')
                            ->required(),

                        RichEditor::make('content')
                            ->required()
                            ->columnSpanFull(),

                        DatePicker::make('published_at')
                            ->default(now())
                            ->required(),
                    ])->columns(2),
            ]);
    }
}