<?php
require_once 'Abstract_HighWay.php';
final class Residenttial extends HighWay{


    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle(Vehicle $all){
        if ($all ){
            $this->currentVehicles[] = $all;
            echo 'Vous roulez sur une route résidentiel authorisé a tout type de véhicule. ';
        }else{
            echo "vous n'etes pas autorisé. ";
        }
      
    }
}