<!-- Create a base class Animal with a method makeSound that returns "Some sound". Create a derived class Dog that overrides the makeSound method to return "Bark". Instantiate the Dog class and call the makeSound method. -->
<?php
    class Animal{
        public $sound;
        public function makeSound(){
            return $this->sound = "Some Sound";
        }
    }

    class Dog extends Animal{
        public function makeSound(){
            return $this->sound = "Bark";
        }
    }

    $animal = new Dog();
    echo $animal->makeSound();
?>