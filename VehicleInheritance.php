<?php
    class Vehicle{
        public $engineStatus;
        public function startEngine(){
            return $this->engineStatus = "Engine Started";
        }
    }

    class Car extends Vehicle{
        public function startEngine(){
            $parentResult = parent::startEngine();
            return $parentResult . " And Car Started";
        }
    }

    $car = new Car();
    echo $car->startEngine();
?>