
  <?php

require_once 'Vehicule.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicule implements LightableInterface
{
    public function switchOn(): bool
    {
        if ($this->getCurrentSpeed()> 10){
            return true;
        } else {
            return false;
        }
    }
    public function switchOff(): bool
    {
        return false;
    }
}

