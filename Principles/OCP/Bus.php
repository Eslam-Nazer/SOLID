<?php

namespace App\Solid\OCP;

class Bus extends Vehicle
{
    /**
     * Summary of numberOfPassengers
     * @var int
     */
    private int $numberOfPassengers;

    /**
     * Summary of doors
     * @var int
     */
    private int $doors;
    /**
     * Summary of routes
     * @var array
     */

    /**
     * Summary of __construct
     * @param int $busNumber
     */
    public function __construct(
        private int $busNumber,
    ) {}

    /**
     * Summary of setNumberOfPassengers
     * @param int $numberOfPassengers
     */
    public function setNumberOfPassengers(int $numberOfPassengers)
    {
        $this->numberOfPassengers = $numberOfPassengers;
    }

    /**
     * Summary of getNumberOfPassengers
     * @return int
     */
    public function getNumberOfPassengers(): int
    {
        return $this->numberOfPassengers;
    }

    /**
     * Summary of setDoors
     * @param int $doors
     */
    public function setDoors(int $doors)
    {
        $this->doors = $doors;
    }

    /**
     * Summary of getDoors
     * @return int
     */
    public function getDoors(): int
    {
        return $this->doors;
    }

    /**
     * Summary of setBusNumber
     * @param int $busNumber
     */
    public function setBusNumber(int $busNumber)
    {
        $this->busNumber = $busNumber;
    }

    /**
     * Summary of getBusNumber
     * @return int
     */
    public function getBusNumber(): int
    {
        return $this->busNumber;
    }

    // Methods

    /**
     * Summary of driveToRoute
     * @param string $from
     * @param string $to
     * @return string
     */
    public function driveToRoute(string $from, string $to): string
    {
        return "The bus is moving from {$from} to {$to}";
    }

    /**
     * Summary of doMiantenance
     * @return string
     */
    public function doMiantenance(): string
    {
        return "The bus is doing maintenance right now";
    }
}
