<?php

namespace Freicon\Nagios\Plugin\Performance;


class SecondMeasurement implements UnitOfMeasurementInterface
{

    /**
     * @return string
     */
    public function getUOMCharacter()
    {
        return "s";
    }
}
