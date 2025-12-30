<?php

namespace App\Filament\Resources\AccountRegistrations\Pages;

use App\Filament\Resources\AccountRegistrations\AccountRegistrationResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAccountRegistration extends EditRecord
{
    protected static string $resource = AccountRegistrationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
