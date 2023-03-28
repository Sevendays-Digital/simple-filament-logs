<?php

namespace SevendaysDigital\SimpleFilamentLogs;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class SimpleFilamentLogsServiceProvider extends PluginServiceProvider
{
    public static string $name = 'simple-filament-logs';

    protected array $resources = [
        // CustomResource::class,
    ];

    protected array $pages = [
        // CustomPage::class,
    ];

    protected array $widgets = [
        // CustomWidget::class,
    ];

    protected array $styles = [
        'plugin-simple-filament-logs' => __DIR__.'/../resources/dist/simple-filament-logs.css',
    ];

    protected array $scripts = [
        'plugin-simple-filament-logs' => __DIR__.'/../resources/dist/simple-filament-logs.js',
    ];

    // protected array $beforeCoreScripts = [
    //     'plugin-simple-filament-logs' => __DIR__ . '/../resources/dist/simple-filament-logs.js',
    // ];

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name);
    }
}
