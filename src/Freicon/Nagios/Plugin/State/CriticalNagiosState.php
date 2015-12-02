<?php

namespace Freicon\Nagios\Plugin\State;

class CriticalNagiosState implements NagiosState
{

    /**
     * @return integer
     */
    public function getStateValue()
    {
        return 2;
    }

    /**
     * @return string
     */
    public function getStateText()
    {
        return "CRITICAL";
    }
}
