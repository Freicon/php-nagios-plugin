<?php

namespace Freicon\Nagios\Plugin\State;


class OkNagiosState implements NagiosState
{

    /**
     * @return integer
     */
    public function getStateValue()
    {
        return 0;
    }

    /**
     * @return string
     */
    public function getStateText()
    {
        return "OK";
    }
}
