<?php

namespace App\Solid\OCP;

use IVehicle;

class Trip
{
    /**
     * Summary of __construct
     * @param Vehicle $vehicle
     * @param string $tripNumber
     * @param float $tripPrice
     * @param int $duration
     */
    public function __construct(
        private Vehicle $vehicle,
        private string $tripNumber,
        private float $tripPrice,
        private int $duration,
    ) {}


    /**
     * Summary of setVehicle
     * @param Vehicle $vehicle
     */
    public function setVehicle(Vehicle $vehicle): void
    {
        $this->vehicle = $vehicle;
    }

    /**
     * Summary of getVehicle
     * @return Vehicle
     */
    public function getVehicle(): Vehicle
    {
        return $this->vehicle;
    }

    /**
     * Summary of setTripNumber
     * @param string $tripNumber
     */
    public function setTripNumber(string $tripNumber): void
    {
        $this->tripNumber = $tripNumber;
    }

    /**
     * Summary of getTripNumber
     * @return string
     */
    public function getTripNumber(): string
    {
        return $this->tripNumber;
    }

    /**
     * Summary of setTripPrice
     * @param float $tripPrice
     */
    public function setTripPrice(float $tripPrice): void
    {
        $this->tripPrice = $tripPrice;
    }

    /**
     * Summary of getTripPrice
     * @return float
     */
    public function getTripPrice(): float
    {
        return $this->tripPrice;
    }

    /**
     * Summary of setDuration
     * @param int $duration
     */
    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }

    /**
     * Summary of getDuration
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * Summary of move
     * @return string
     */
    public function move(): string
    {
        return $this->getVehicle()->move();
    }
}
