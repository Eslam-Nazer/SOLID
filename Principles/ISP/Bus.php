<?php

namespace App\Solid\ISP;

class Bus implements Vehicel
{
    public function move()
    {
        echo "I am moving";
    }

    public function stop()
    {
        echo "Stoping....";
    }
}
