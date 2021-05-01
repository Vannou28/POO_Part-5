<?php

abstract class HighWay {
    
    protected  array $currentVehicules = [];
    protected int $nbLane;
    protected int $maxSpeed;
    
    public function __construct( int $nbLane, int $maxSpeed)
    {
     
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    abstract public function addVehicule (Vehicule $vehicule);

    public function setCurrentVehicules(Vehicule $vehicule)
    {
        $this->currentVehicules[]= $vehicule;
    }

    public function getCurrentVehicules(): array
    {
        return $this->currentVehicules;
    }

    public function setNbLane(string $nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setMaxSpeed(string $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }
}