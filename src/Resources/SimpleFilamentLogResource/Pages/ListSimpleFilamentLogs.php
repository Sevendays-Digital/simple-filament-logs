<?php

namespace SevendaysDigital\SimpleFilamentLogs\Resources\SimpleFilamentLogResource\Pages;

use Filament\Resources\Pages\ListRecords;
use SevendaysDigital\SimpleFilamentLogs\Resources\SimpleFilamentLogResource;

class ListSimpleFilamentLogs extends ListRecords
{
    protected static string $resource = SimpleFilamentLogResource::class;

    protected function getActions(): array
    {
        return [];
    }
}
