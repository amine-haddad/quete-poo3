<?php

//crée une classe abstract
abstract class HighWay
{

    protected array $currentVehicles = [];
    protected int $nbLane;
    protected int $maxSpeed;


    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }



    public function getCurrentVehicles(): array

    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles(array $currentVehicles): void

    {
        $this->currentVehicles = $currentVehicles;
    }

    public function getnbLane(): int

    {
        return $this->nbLane;
    }

    public function setnbLane(int $nbLane): void

    {
        $this->nbLane = $nbLane;
    }

    public function getmaxSpeed(): int

    {
        return $this->maxSpeed;
    }

    public function setmaxSpeed(int $maxSpeed): void

    {
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicle(Vehicle $vehicle);
}
