<?php

namespace App\Solid\OCP;


abstract class Vehicle implements IMovable, IVehicle
{
    /**
     * Summary of movable
     * @var IMovable
     */
    private IMovable $movable;

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
     * Summary of setMovable
     * @param IMovable $movable
     */
    public function setMovable(IMovable $movable)
    {
        $this->movable = $movable;
    }

    /**
     * Summary of getMovable
     * @return IMovable
     */
    public function getMovable(): IMovable
    {
        return $this->movable;
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
     * Summary of getColor
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
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
     * Summary of getMaxSpeed
     * @return int
     */
    public function getMaxSpeed(): int
    {
        return $this->maximumSpeed;
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
     * Summary of getDriver
     * @return Driver
     */
    public function getDriver(): Driver
    {
        return $this->driver;
    }

    /**
     * Summary of addRoute
     * @param Route $route
     */
    public function addRoute(Route $route)
    {
        $this->route[] = $route;
    }

    /**
     * Summary of getRoutes
     * @return array
     */
    public function getRoutes(): array
    {
        return $this->route;
    }

    /**
     * Summary of move
     * @return string
     */
    public function move(): string
    {
        return $this->getMovable()->move();
    }
}
