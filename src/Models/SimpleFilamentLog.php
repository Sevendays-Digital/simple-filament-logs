<?php

namespace SevendaysDigital\SimpleFilamentLogs\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use SevendaysDigital\SimpleFilamentLogs\SimpleLogSeverity;

class SimpleFilamentLog extends Model
{
    protected $casts = [
        'severity' => SimpleLogSeverity::class,
    ];

    public function about(): MorphTo
    {
        return $this->morphTo();
    }

    public function by(): MorphTo
    {
        return $this->morphTo();
    }
}
