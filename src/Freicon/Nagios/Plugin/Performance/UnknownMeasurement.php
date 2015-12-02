<?php

namespace Freicon\Nagios\Plugin\Performance;


class UnknownMeasurement implements UnitOfMeasurementInterface
{

    /**
     * @return string
     */
    public function getUOMCharacter()
    {
        return "";
    }
}
