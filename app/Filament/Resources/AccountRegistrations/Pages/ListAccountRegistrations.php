<?php

namespace App\Filament\Resources\AccountRegistrations\Pages;

use App\Filament\Resources\AccountRegistrations\AccountRegistrationResource;
use Filament\Resources\Pages\ListRecords;

class ListAccountRegistrations extends ListRecords
{
    protected static string $resource = AccountRegistrationResource::class;
}
