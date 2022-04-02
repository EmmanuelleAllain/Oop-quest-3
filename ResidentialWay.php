<?php

require_once 'HighWay.php';

final Class ResidentialWay extends HighWay 
{
   public function __construct() {
    parent::__construct(2, 50);
   }

   public function addVehicle(Vehicle $vehicle)
   {
       if($vehicle instanceof Vehicle) {
           $currentVehicles[] = $vehicle;
       }
   }
}