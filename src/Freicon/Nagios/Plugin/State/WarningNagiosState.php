<?php

namespace Freicon\Nagios\Plugin\State;


class
WarningNagiosState implements NagiosState
{

    /**
     * @return integer
     */
    public function getStateValue()
    {
        return 1;
    }

    /**
     * @return string
     */
    public function getStateText()
    {
        return "WARNING";
    }
}
