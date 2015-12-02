<?php

namespace Freicon\Nagios\Plugin\Performance;

class PercentageMeasurement implements UnitOfMeasurementInterface
{

    /**
     * @return string
     */
    public function getUOMCharacter()
    {
        return "%";
    }
}
