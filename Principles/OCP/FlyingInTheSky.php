<?php

namespace App\Solid\OCP;


class FlyingInTheSky implements IMovable
{
    /**
     * Summary of move
     * @return string
     */
    public function move(): string
    {
        return "I am flying in the sky";
    }
}
