<?php

namespace Freicon\Nagios\Plugin\Performance;

class TerraByteMeasurement extends SizeMeasurementInterface
{

    /**
     * @return string
     */
    public function getUOMCharacter()
    {
        return "TB";
    }
}
