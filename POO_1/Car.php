<?php

class Car{
    
    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
     */
    private $currentSpeed;

    /**
     * @var integer
     */
    private $nbSeats = 1;

    /**
     * @var integer
     */
    private $nbWheels = 2;

    /**
     * @return string
     */
    private $energy = "electricity";

    /**
     * @var integer
     */
    private $energyLevel = 1;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
	$this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

        public function forward()
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start()
    {
        $this->currentSpeed = 0;
        return "Vroom!";
    }

    /**
     * @return int
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return int
     */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    
    /**
     * @return string
     */ 
    public  function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @return int
     */
    public function getEnergyLevel() : int
    {
        return $this->energyLevel;
    }

}
