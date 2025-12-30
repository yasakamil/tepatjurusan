<?php

namespace App\Filament\Resources\AccountRegistrations\Pages;

use App\Filament\Resources\AccountRegistrations\AccountRegistrationResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAccountRegistration extends CreateRecord
{
    protected static string $resource = AccountRegistrationResource::class;
}
