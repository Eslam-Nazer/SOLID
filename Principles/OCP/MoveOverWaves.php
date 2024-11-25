<?php

use App\Solid\OCP\IMovable;

class MoveOverWaves implements IMovable
{
    /**
     * Summary of move
     * @return string
     */
    public function move(): string
    {
        return "I am floating over the waves";
    }
}
