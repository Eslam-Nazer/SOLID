<?php

namespace App\Solid\SRP;

class Bus
{
    /**
     * Summary of numberOfPassengers
     * @var int
     */
    private int $numberOfPassengers;
    /**
     * Summary of color
     * @var string
     */
    private string $color;
    /**
     * Summary of maximumSpeed
     * @var int
     */
    private int $maximumSpeed;

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
     * Summary of driver
     * @var Driver
     */
    private Driver $driver;

    /**
     * Summary of route
     * @var array
     */
    private array $route;

    /**
     * Summary of __construct
     * @param int $busNumber
     */
    public function __construct(
        private int $busNumber,
    ) {}

    // Setters

    /**
     * Summary of setNumberOfPassengers
     * @param int $numberOfPassengers
     */
    public function setNumberOfPassengers(int $numberOfPassengers)
    {
        $this->numberOfPassengers = $numberOfPassengers;
    }

    /**
     * Summary of setColor
     * @param string $color
     */
    public function setColor(string $color)
    {
        $this->color = $color;
    }

    /**
     * Summary of setMaxSpeed
     * @param int $maximumSpeed
     */
    public function setMaxSpeed(int $maximumSpeed)
    {
        $this->maximumSpeed = $maximumSpeed;
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
     * Summary of setBusNumber
     * @param int $busNumber
     */
    public function setBusNumber(int $busNumber)
    {
        $this->busNumber = $busNumber;
    }

    /**
     * Summary of setDriver
     * @param Driver $driver
     */
    public function setDriver(Driver $driver)
    {
        $this->driver = $driver;
    }

    /**
     * Summary of addRoute
     * @param Route $route
     */
    public function addRoute(Route $route)
    {
        $this->route[] = $route;
    }

    // Getters

    /**
     * Summary of getNumberOfPassengers
     * @return int
     */
    public function getNumberOfPassengers(): int
    {
        return $this->numberOfPassengers;
    }

    /**
     * Summary of getColor
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * Summary of getMaxSpeed
     * @return int
     */
    public function getMaxSpeed(): int
    {
        return $this->maximumSpeed;
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
     * Summary of getBusNumber
     * @return int
     */
    public function getBusNumber(): int
    {
        return $this->busNumber;
    }

    /**
     * Summary of getDriver
     * @return Driver
     */
    public function getDriver(): Driver
    {
        return $this->driver;
    }

    /**
     * Summary of getRoutes
     * @return array
     */
    public function getRoutes(): array
    {
        return $this->route;
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

    /**
     * Summary of move
     * @return string
     */
    public function move(): string
    {
        $result = "";
        foreach ($this->getRoutes() as $route) {
            $result .= "<p>I am moving now from " . $route->getSource() . " to " . $route->getDestination()
                . " at maxiumum speed  of " . $this->getMaxSpeed() .
                " the driver is: " . $this->getDriver()->getName() . "</p>";
        }

        return $result;
    }
}
