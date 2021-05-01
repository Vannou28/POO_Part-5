<?php

//a mettre au bout d'un class utiliser dans l'interface ex : class Car implements LightableInterface 

interface LightableInterface
{
    public function switchOn(): bool ;
    public function switchOff(): bool ;
}