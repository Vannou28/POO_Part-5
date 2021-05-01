<?php

require_once 'Vehicule.php';
require_once 'LightableInterface.php';

class Car extends Vehicule implements LightableInterface
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake=true;
    
    public function __construct(string $color, int $nbSeats,  string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function start(): string
    {
        try{
            if ($this->hasParkBrake === true) {
                throw new Exception("frein a main active");
            }
        }catch(Exception $e){
            $this->setParkBrake(false);
            echo  " message exception : " . $e->getMessage() . "<br>";
        }finally{
            return "Ma voiture roule comme un donut";
        }
    }
       
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): string
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(string $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    
    public function setParkBrake(bool $parkBrake)
    {
        $this->hasParkBrake = $parkBrake;

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

?>