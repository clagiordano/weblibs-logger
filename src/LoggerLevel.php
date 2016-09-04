<?php

namespace clagiordano\weblibs\php;

/**
 * Simple class for multi level log operations,
 * inspired from:
 *
 * https://github.com/php-fig/log
 *
 * Copyright 2014 Claudio Giordano <claudio.giordano@autistici.org>
 */
class LoggerLevels
{
    const EMERGENCY = 'emergency';
    const ALERT     = 'alert';
    const CRITICAL  = 'critical';
    const ERROR     = 'error';
    const WARNING   = 'warning';
    const NOTICE    = 'notice';
    const INFO      = 'info';
    const DEBUG     = 'debug';
}
