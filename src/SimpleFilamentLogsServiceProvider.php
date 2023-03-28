<?php

namespace SevendaysDigital\SimpleFilamentLogs;

use Filament\PluginServiceProvider;
use SevendaysDigital\SimpleFilamentLogs\Resources\SimpleFilamentLogResource;
use Spatie\LaravelPackageTools\Package;

class SimpleFilamentLogsServiceProvider extends PluginServiceProvider
{
    public static string $name = 'simple-filament-logs';

    protected array $resources = [
        SimpleFilamentLogResource::class,
    ];

    public function boot(): void
    {
        parent::boot();
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name);
    }
}
