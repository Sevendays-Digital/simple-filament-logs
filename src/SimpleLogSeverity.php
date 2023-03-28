<?php

namespace SevendaysDigital\SimpleFilamentLogs;

enum SimpleLogSeverity: string
{
    case LOG = 'log';
    case WARNING = 'warning';
    case SUCCESS = 'success';
    case ERROR = 'error';
}
