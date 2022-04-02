<?php

require_once 'HighWay.php';

final Class PedestrianWay extends HighWay 
{
   public function __construct() {
    parent::__construct(1, 10);
   }

   public function addVehicle(Vehicle $vehicle)
   {
       if($vehicle instanceof Bike || $vehicle instanceof Skateboard) {
           $currentVehicles[] = $vehicle;
       }
   }
}