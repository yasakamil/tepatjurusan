<?php

namespace App\Filament\Resources\AccountRegistrations;

use App\Filament\Resources\AccountRegistrations\Pages\CreateAccountRegistration;
use App\Filament\Resources\AccountRegistrations\Pages\EditAccountRegistration;
use App\Filament\Resources\AccountRegistrations\Pages\ListAccountRegistrations;
use App\Filament\Resources\AccountRegistrations\Schemas\AccountRegistrationForm;
use App\Filament\Resources\AccountRegistrations\Tables\AccountRegistrationsTable;
use App\Models\AccountRegistration;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AccountRegistrationResource extends Resource
{
    protected static ?string $model = AccountRegistration::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUserPlus;

    protected static ?string $navigationLabel = 'Account Registrations';

    protected static ?string $recordTitleAttribute = 'nama';

    public static function form(Schema $schema): Schema
    {
        return AccountRegistrationForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AccountRegistrationsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }
    

    public static function getPages(): array
    {
        return [
            'index' => ListAccountRegistrations::route('/'),
            'create' => CreateAccountRegistration::route('/create'),
            'edit' => EditAccountRegistration::route('/{record}/edit'),
        ];
    }
}
