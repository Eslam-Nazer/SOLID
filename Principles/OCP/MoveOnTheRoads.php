<?php

namespace App\Solid\OCP;

class MoveOnTheRoads implements IMovable
{
    /**
     * Summary of move
     * @return string
     */
    public function move(): string
    {
        return "I moving on the roads";
    }
}
