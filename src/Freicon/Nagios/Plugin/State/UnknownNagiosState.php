<?php

namespace Freicon\Nagios\Plugin\State;

class UnknownNagiosState implements NagiosState
{

    /**
     * @return integer
     */
    public function getStateValue()
    {
        return 3;
    }

    /**
     * @return string
     */
    public function getStateText()
    {
        return "UNKNOWN";
    }
}
