<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle
{
  public function switchOn(): bool
  {
    if ($this->currentSpeed > 10) {
        return true;
    }
    return false;
  }

  public function switchOff(): bool
  {
    return false;
  }
}
?>