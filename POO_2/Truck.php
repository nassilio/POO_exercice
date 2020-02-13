<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{

    const MAX_STORAGE = 10000;
    private $storage = 0;

    private $load = 0;

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
      if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
      }
      return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function isFull(): string
    {

        if ($this->storage >= self::MAX_STORAGE) {
            return 'full';
        } else return 'in filling';
    }

    /**
     * @return int
     */
    public function getStorage()
    {
        return $this->storage;
    }

    /**
     * @return int
     */
    public function getLoad()
    {
        return $this->load;
    }

    /**
     * @param int $storage
     */
    public function setStorage($storage)
    {
        $this->storage = $storage;
    }

    /**
     * @param int $load
     */
    public function setLoad($load)
    {
        $this->load = $load;
    }

}

