<?php

namespace Victor;

class Bike implements VehicleInterface
{

    function forward()
    {
        echo "오토바이가 앞으로 갑니다".PHP_EOL;
    }

    function reverse()
    {
        echo "오토바이가 뒤로 갑니다".PHP_EOL;
    }
}