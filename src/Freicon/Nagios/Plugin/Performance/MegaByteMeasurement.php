<?php

namespace Freicon\Nagios\Plugin\Performance;


class MegaByteMeasurement extends SizeMeasurementInterface
{

    /**
     * @return string
     */
    public function getUOMCharacter()
    {
        return "MB";
    }
}
