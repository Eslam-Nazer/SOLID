<?php

namespace App\Solid\LSP;

class Rectangle
{
    /**
     * Summary of width
     * @var int
     */
    protected int $width;

    /**
     * Summary of height
     * @var int
     */
    protected int $height;


    /**
     * Summary of setWidth
     * @param int $width
     */
    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    /**
     * Summary of getWidth
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * Summary of setHeight
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    /**
     * Summary of getHeight
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * Summary of calculateArea
     * @return int
     */
    public function calculateArea(): int
    {
        return $this->getWidth() * $this->getHeight();
    }
}
