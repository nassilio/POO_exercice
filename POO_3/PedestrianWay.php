<?php


final class PedestrianWay extends HighWay
{
    protected $nbLane = 1;

    protected $maxSpeed = 10;

    public function addVehicle(vehicle $vehicle)
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
            $this->currentVehicles[]=$vehicle;
        }
    }
}