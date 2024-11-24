<?php

use App\Solid\SRP\Bus;
use App\Solid\SRP\Driver;
use App\Solid\SRP\Route;

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
$bus->setDoors(3);
$bus->setMaxSpeed(140);
$bus->setNumberOfPassengers(63);
$bus->addRoute($route80);
$bus->addRoute($route90);

// echo "<pre>";
// var_dump($bus);
echo $bus->move();
