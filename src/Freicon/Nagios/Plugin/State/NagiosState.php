<?php

namespace Freicon\Nagios\Plugin\State;


interface NagiosState
{
    /**
     * @return integer
     */
    public function getStateValue();

    /**
     * @return string
     */
    public function getStateText();

}
