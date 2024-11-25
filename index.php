<?php

use App\Solid\OCP\Bus;
use App\Solid\OCP\Car;
use App\Solid\OCP\Trip;
use App\Solid\OCP\Plane;
use App\Solid\OCP\Route;
use App\Solid\OCP\Driver;
use App\Solid\OCP\MoveOnTheRoads;

require_once "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

$Eslam = new Driver(
    "Eslam",
    24,
    "Egypt",
    "ED4343242"
);

$route80 = new Route(
    "Cairo",
    "Alex",
    300
);

$route90 = new Route(
    "Alex",
    "Marsa Matrouh",
    435
);

$bus = new Bus(201);
$bus->setColor("red");
$bus->setDriver($Eslam);
// $bus->setDoors(3);
$bus->setMaxSpeed(140);
// $bus->setNumberOfPassengers(63);
$bus->addRoute($route80);
$bus->addRoute($route90);
$bus->setMovable(new MoveOnTheRoads());

// echo "<pre>";
// var_dump($bus);
// echo $bus->move();

$trip = new Trip(
    $bus,
    "R220",
    35.25,
    130
);

echo $trip->move();
