<?php

namespace SevendaysDigital\SimpleFilamentLogs;

use Illuminate\Database\Eloquent\Model;
use SevendaysDigital\SimpleFilamentLogs\Models\SimpleFilamentLog;

class SimpleLogger
{
    public function log(
        string $log,
        SimpleLogSeverity $severity = SimpleLogSeverity::LOG,
        Model $about = null,
        Model $by = null,
    ): void {
        $simpleLog = new SimpleFilamentLog();
        $simpleLog->severity = $severity;
        $simpleLog->log = $log;
        $simpleLog->about()->associate($about);
        $simpleLog->by()->associate($by);
        $simpleLog->save();
    }

    public function error(
        string $log,
        Model $about = null,
        Model $by = null,
    ): void {
        $this->log($log, SimpleLogSeverity::ERROR, $about, $by);
    }

    public function warning(
        string $log,
        Model $about = null,
        Model $by = null,
    ): void {
        $this->log($log, SimpleLogSeverity::WARNING, $about, $by);
    }

    public function success(
        string $log,
        Model $about = null,
        Model $by = null,
    ): void {
        $this->log($log, SimpleLogSeverity::SUCCESS, $about, $by);
    }
}
