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