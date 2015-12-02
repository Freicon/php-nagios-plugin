<?php

namespace Freicon\Nagios\Plugin\Performance;


interface UnitOfMeasurementInterface
{
    /**
     * @return string
     */
    public function getUOMCharacter();

}
