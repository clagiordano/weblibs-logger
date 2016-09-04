<?php

namespace clagiordano\weblibs\logger;

/**
 * Interface LoggerInterface
 * @package clagiordano\weblibs\logger
 */
interface LoggerInterface
{
    public function emergency();

    public function alert();

    public function critical();

    public function error();

    public function warning();

    public function notice();

    public function info();

    public function debug();
}
