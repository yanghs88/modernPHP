<?php

include 'interfaceTest/autoload.php';

//autoload 를 사용 안하면 아래와 같다.
//require_once __DIR__.'/interfaceTest/src/VehicleInterface.php';
//require_once __DIR__.'/interfaceTest/src/ParkingGarage.php';
//require_once __DIR__.'/interfaceTest/src/Bike.php';
//require_once __DIR__.'/interfaceTest/src/Car.php';


$parking = new \Victor\ParkingGarage();
$parking->addVichele(new \Victor\Bike());
$parking->addVichele(new \Victor\Car());
$parking->getVichles();


?>