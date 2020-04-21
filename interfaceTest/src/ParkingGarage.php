<?php

namespace Victor;

class ParkingGarage
{
    protected $vehicles = [];

    public function addVichele(VehicleInterface $vehicle) {
        $this->vehicles[] = $vehicle;
    }

    public function getVichles() {

        foreach ($this->vehicles as $vehicle) {

//            var_dump($vehicle);

            if ($vehicle instanceof Bike) {
                echo "Bike =============".PHP_EOL;

            } else if ($vehicle instanceof Car) {
                echo "Car =============".PHP_EOL;
            }

            echo $vehicle->forward();
            echo $vehicle->reverse();

        }
    }
}