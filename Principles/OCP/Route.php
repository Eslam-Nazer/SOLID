<?php

namespace App\Solid\OCP;

class Route
{
    /**
     * Summary of __construct
     * @param string $source
     * @param string $destination
     * @param int $distance
     */
    public function __construct(
        private string $source,
        private string $destination,
        private int $distance,
    ) {}

    // Setters

    /**
     * Summary of setSource
     * @param string $source
     */
    public function setSource(string $source): void
    {
        $this->source = $source;
    }

    /**
     * Summary of setDestination
     * @param string $destination
     * @return void
     */
    public function setDestination(string $destination): void
    {
        $this->destination = $destination;
    }

    /**
     * Summary of setDistance
     * @param string $distance
     * @return void
     */
    public function setDistance(int $distance): void
    {
        $this->distance = $distance;
    }

    // Getters

    /**
     * Summary of getSource
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * Summary of getDestination
     * @return string
     */
    public function getDestination(): string
    {
        return $this->destination;
    }

    /**
     * Summary of getDistance
     * @return int
     */
    public function getDistance(): int
    {
        return $this->distance;
    }
}
