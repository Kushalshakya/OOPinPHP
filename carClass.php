<!-- Create a class named Car with a property brand and a method getBrand that returns the brand of the car. Instantiate an object of the class Car, set the brand to "Toyota", and print the brand using the getBrand method. -->
<?php
    class Car{
        public $brand;

        public function getBrand(){
            return $this->brand;
        }
    }
    
    $car = new Car();
    $car->brand = "Toyota";
    echo $car->getBrand();
?>