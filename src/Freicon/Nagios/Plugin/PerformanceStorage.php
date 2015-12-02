<?php

namespace Freicon\Nagios\Plugin;


use Freicon\Nagios\Plugin\Performance\PerformanceCounter;

class PerformanceStorage
{
    /**
     * @var PerformanceCounter[]
     */
    private $data;

    /**
     * PerformanceStorage constructor.
     * @param array $data
     */
    public function __construct(array $data = array())
    {
        $this->data = $data;
    }

    /**
     * @param PerformanceCounter $value
     * @return $this
     */
    public function addCounter(PerformanceCounter $value) {
        $this->data[$value->getIdentifier()] = $value;
        return $this;
    }

    public function toString() {
        $output = "";
        foreach ($this->data as $item) {
            $output .= $item->toString()." ";
        }
        return trim($output);
    }

}
