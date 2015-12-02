<?php

namespace Freicon\Nagios\Plugin\Performance;


class ContinousMeasurement implements UnitOfMeasurementInterface
{

    /**
     * @return string
     */
    public function getUOMCharacter()
    {
        return "c";
    }
}
