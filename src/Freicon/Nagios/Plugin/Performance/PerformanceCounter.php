<?php

namespace Freicon\Nagios\Plugin\Performance;


class PerformanceCounter
{
    private $identifier;
    private $value;
    /**
     * @var UnitOfMeasurementInterface
     */
    private $unitOfMeasurement;

    /**
     * PerformanceCounter constructor.
     */
    public function __construct($identifier, $value, $unitOfMeasurement = null)
    {
        $this->identifier = $identifier;
        $this->value = $value;
        $this->unitOfMeasurement = $unitOfMeasurement ?: new UnknownMeasurement();
    }

    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return UnitOfMeasurementInterface
     */
    public function getUnitOfMeasurement()
    {
        return $this->unitOfMeasurement;
    }

    public function toString() {
        return "'{$this->identifier}'={$this->value}{$this->unitOfMeasurement->getUOMCharacter()}";
    }

}
