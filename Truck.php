
<?php

require_once 'Vehicule.php';
require_once 'LightableInterface.php';


class Truck extends Vehicule implements LightableInterface
{

    private string $energy;
    private int $storageCapacity;
    private int $capacity;
    private int $load;

    public function __construct( string $color, int $nbSeats,int $capacity, string $energy, int $load = 0)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->capacity = $capacity;
        $this->load = $load;
    }
   
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy)
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getCapacity(): int
    {
        return $this->capacity;
    }

    public function setCapacity(string $capacity): void
    {
        $this->capacity = $capacity;
    }

    public function getLoad(): int
    {
        return $this->load;
    }

    public function setLoad(string $load)
    {
        if($load < $this->capacity)
        {
            $this->load += $load;
        }
    }
    
    public function checkLoad(): string
    {
        if ( $this->capacity <= $this->load)
        {
            return "full";
        } 
        else {
            return "in filling";
        }
    }

    public function switchOn(): bool
    {
        return true;
    }
    public function switchOff(): bool
    {
        return false;
    }

}