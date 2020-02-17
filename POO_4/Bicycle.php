<?php

require_once 'Vehicle.php';

class Bicycle extends Vehicle implements LightableInterface
{
    public function switchOn(): bool
    {
        if ($this->currentSpeed >= 10){

        } else {
            return false;
        }
    }

    public function switchOff(): bool
    {
        return  false;
    }
}

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);



