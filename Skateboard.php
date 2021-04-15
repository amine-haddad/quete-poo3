<?php
require_once 'Vehicle.php';
// Skateboard.php

class Skateboard extends Vehicle
{
    public function __construct(string $color, int $nbSeats, int $nbWheel)

    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->nbWheels = $nbWheel;
    }
}
