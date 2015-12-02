<?php

namespace Freicon\Nagios\Plugin\Performance;


class KiloByteMeasurement extends SizeMeasurementInterface
{

    /**
     * @return string
     */
    public function getUOMCharacter()
    {
        return "KB";
    }
}
