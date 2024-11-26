<?php

namespace App\Solid\ISP;

class Car implements Vehicel, Speedable, Entertainment
{
    public function move()
    {
        echo "I am moving";
    }

    public function stop()
    {
        echo "Stoping....";
    }

    public function accelerate()
    {
        echo "I can accelerate up to 200Km/H";
    }

    public function musicPlay()
    {
        echo "Playing your favorite music";
    }

    public function pause()
    {
        echo "Puasing current track";
    }

    public function rewind()
    {
        echo "I will rewind the tape";
    }
}
