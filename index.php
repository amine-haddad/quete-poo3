<?php


require 'Vehicle.php';
require 'Car.php';
require 'Bicycle.php';
require 'Truck.php';
require 'Skateboard.php';
require 'MotorWay.php';
require 'PedestrianWay.php';
require 'ResidentialWay.php';

$motorway = new MotorWay('4', '130');
$bike1 = new Bicycle('black', '1');
$bike2 = new Bicycle('green', '1');
$bike3 = new Bicycle('red', '1');
$car1 = new Car('red', '4', 'fuel');
$car2 = new Car('blue', '4', 'fuel');
$car3 = new Car('yellow', '4', 'electric');
$truck = new Truck('black', 12, 'Fuel', 50);

echo $car1->Start();
echo $car1->forward();
echo $car1->setCurrentSpeed(150);
echo '<br> Vitesse de la voiture: ' . $car1->getCurrentSpeed() . ' km/h' . '<br>';

echo $car1->brake();

echo '<br> Vitesse de la voiture : ' . $car1->getCurrentSpeed() . ' km/h' . '<br>';

echo $car1->brake() . '<br>';

echo $bike1->forward();
echo $bike1->setCurrentSpeed(30);
echo '<br> Vitesse du vélo : ' . $bike1->getcurrentSpeed() . ' km/h' . '<br>';

echo $bike1->brake();

echo '<br> Vitesse du vélo : ' . $bike1->getcurrentSpeed() . ' km/h' . '<br>';

echo $bike1->brake() . '<br>';

$car = new Car('green', 4, 'electric');

echo $car1->forward();

//var_dump($car);

//var_dump(Car::ALLOWED_ENERGIES);

//var_dump($truck);
//var_dump(Truck::ALLOWED_LOADING);

echo $truck->Start();
echo $truck->forward();
echo $truck->setCurrentSpeed(70);
echo '<br> Vitesse du camion: ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';

echo $truck->brake();

echo '<br> Vitesse de la camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';

echo $truck->brake() . '<br>';
echo  'contôle chargement: ';
echo $truck->setLoading(true);

$motorway = new MotorWay('4', '130');
echo '<br> Nombre de voie : ' . $motorway->getnbLane() . ' et vitesse max de :' . $motorway->getmaxSpeed() . ' km/h' . '<br>';
echo $motorway->addVehicle($car1) . '<br>';
echo $motorway->addVehicle($bike1) . '<br>';
echo $motorway->addVehicle($truck) . '<br>';

$pedestrianWay = new PedestrianWay('1', '10');
echo '<br> Nombre de voie : ' . $pedestrianWay->getnbLane() . ' et vitesse max de :' . $pedestrianWay->getmaxSpeed() . ' km/h' . '<br>';
echo $pedestrianWay->addVehicle($car2) . '<br>';
echo $pedestrianWay->addVehicle($bike2) . '<br>';
echo $pedestrianWay->addVehicle($truck) . '<br>';

$residentialWay = new Residenttial('2', '50');
echo '<br> Nombre de voie : ' . $residentialWay->getnbLane() . ' et vitesse max de :' . $residentialWay->getmaxSpeed() . ' km/h' . '<br>';
echo $residentialWay->addVehicle($car3) . '<br>';
echo $residentialWay->addVehicle($bike3) . '<br>';
echo $residentialWay->addVehicle($truck) . '<br>';


