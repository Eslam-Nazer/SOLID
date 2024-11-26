<?php

namespace App\Solid\ISP;

class Truck implements Vehicel, Heavy
{
    public function move()
    {
        echo "I am moving";
    }

    public function stop()
    {
        echo "Stoping....";
    }

    public function carryHeavyCargo()
    {
        echo "Carring a cargo that weighs 2000KG";
    }
}
