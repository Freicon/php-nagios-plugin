<?php

use Freicon\Nagios\Plugin\CheckResult;
use Freicon\Nagios\Plugin\Performance\MegaByteMeasurement;
use Freicon\Nagios\Plugin\Performance\PerformanceCounter;
use Freicon\Nagios\Plugin\PerformanceStorage;
use Freicon\Nagios\Plugin\State\CriticalNagiosState;

require_once __DIR__."/../vendor/autoload.php";

(new CheckResult(new CriticalNagiosState(), "Foooo"))
    ->addCounter(new PerformanceCounter("test","200", new MegaByteMeasurement()))
    ->addCounter(new PerformanceCounter("foo","10"))
    ->sendOutput();
