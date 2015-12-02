<?php

namespace Freicon\Nagios\Plugin;

use Freicon\Nagios\Plugin\Performance\PerformanceCounter;
use Freicon\Nagios\Plugin\State\NagiosState;
use Freicon\Nagios\Plugin\State\UnknownNagiosState;

class CheckResult
{
    /**
     * @var NagiosState
     */
    private $state;

    /**
     * @var string
     */
    private $outputText;
    /**
     * @var PerformanceStorage
     */
    private $performanceStorage;

    /**
     * NagiosOutput constructor.
     * @param NagiosState $state
     */
    public function __construct(NagiosState $state = null, $outputText = null, PerformanceStorage $performanceStorage = null)
    {
        $this->state = $state ?: new UnknownNagiosState();
        $this->outputText = $outputText ?: "No output given!";
        $this->performanceStorage = $performanceStorage ?: new PerformanceStorage();
    }

    /**
     * @param PerformanceCounter $counter
     * @return $this
     */
    public function addCounter(PerformanceCounter $counter) {
        $this->performanceStorage->addCounter($counter);
        return $this;
    }
    public function sendOutput()
    {
        echo $this->toString()."\n";
        exit ($this->state->getStateValue());
    }

    public function toString()
    {
        return "{$this->getState()->getStateText()} - {$this->outputText} | {$this->performanceStorage->toString()}";
    }

    /**
     * Returns the current state
     * @return NagiosState
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets the State
     * @param NagiosState $state
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }
}
