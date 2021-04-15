<?php
require_once 'Abstract_HighWay.php';
final class MotorWay extends HighWay{


    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle(Vehicle $car){
        if ($car instanceof Car){
            $this->currentVehicles[] = $car;
            echo 'motorway : tout type de voiture sur la Mortway';
        }else{
            echo "vous n'etes pas autorisé de roulez sur la Motorway";
        }
      
    }

}