<?php

namespace SevendaysDigital\SimpleFilamentLogs\Facades;

use Illuminate\Support\Facades\Facade;

class SimpleLogger extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \SevendaysDigital\SimpleFilamentLogs\SimpleLogger::class;
    }
}
