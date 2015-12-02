<?php

namespace Freicon\Nagios\Plugin\Performance;


class ByteMeasurement extends SizeMeasurementInterface
{

    /**
     * @return string
     */
    public function getUOMCharacter()
    {
        return "B";
    }
}
