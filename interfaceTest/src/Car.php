<?php

namespace Victor;

class Car implements VehicleInterface
{

    function forward()
    {
        echo "자동차가 전진합니다.".PHP_EOL;
    }

    function reverse()
    {
        echo "자동차가 후진 합니다.".PHP_EOL;
    }
}