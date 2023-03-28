<?php

namespace SevendaysDigital\SimpleFilamentLogs\Resources;

use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Model;
use SevendaysDigital\SimpleFilamentLogs\Models\SimpleFilamentLog;
use SevendaysDigital\SimpleFilamentLogs\Resources\SimpleFilamentLogResource\Pages;
use SevendaysDigital\SimpleFilamentLogs\SimpleLogSeverity;

class SimpleFilamentLogResource extends Resource
{
    protected static ?string $model = SimpleFilamentLog::class;

    protected static ?string $slug = 'simple-filament-logs';

    protected static ?string $recordTitleAttribute = 'id';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                BadgeColumn::make('severity')
                    ->colors([
                        'secondary' => static fn($state): bool => $state === SimpleLogSeverity::LOG->value,
                        'warning' => static fn($state): bool => $state === SimpleLogSeverity::WARNING->value,
                        'success' => static fn($state): bool => $state === SimpleLogSeverity::SUCCESS->value,
                        'danger' => static fn($state): bool => $state === SimpleLogSeverity::ERROR->value,
                    ]),
                TextColumn::make('log')->searchable(),
                TextColumn::make('by.name')->default('System')->searchable(),
                TextColumn::make('about_type')->searchable(),
                TextColumn::make('about_id'),
                TextColumn::make('created_at')->dateTime(),
            ])
            ->filters([
                SelectFilter::make('severity')
                    ->options([
                        SimpleLogSeverity::LOG->value => SimpleLogSeverity::LOG->value,
                        SimpleLogSeverity::WARNING->value => SimpleLogSeverity::WARNING->value,
                        SimpleLogSeverity::SUCCESS->value => SimpleLogSeverity::SUCCESS->value,
                        SimpleLogSeverity::ERROR->value => SimpleLogSeverity::ERROR->value,
                    ])
            ]);
    }

    public static function canEdit(Model $record): bool
    {
        return false;
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canGloballySearch(): bool
    {
        return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSimpleFilamentLogs::route('/'),
        ];
    }
}
