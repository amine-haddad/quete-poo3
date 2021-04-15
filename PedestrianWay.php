<?php
require_once 'Abstract_HighWay.php';
final class PedestrianWay extends HighWay{


    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle(Vehicle $cycle){
        if ($cycle instanceof Bicycle){
            $this->currentVehicles[] = $cycle;
            echo 'Vous etes sur une voie cyclable :';
        }else{
            echo "vous n'etes pas autorisé sur la voie cyclable";
        }
      
    }

}