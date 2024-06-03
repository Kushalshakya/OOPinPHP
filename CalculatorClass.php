<!-- Create a class Calculator with methods add and subtract that take two parameters and return the sum and difference, respectively. Instantiate the class and use these methods to add and subtract two numbers. -->
<?php
    class Calculator{
        public $sum;
        public $sub;
        public function add($num1, $num2){
            return $this->sum = $num1 + $num2;
        }
        public function subtract($num1, $num2){
            return $this->sum = $num1 - $num2;
        }
    }

    $calc = new Calculator();
    echo $calc->add(1,2);
    echo $calc->subtract(2,1);
?>