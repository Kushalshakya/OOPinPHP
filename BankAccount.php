<!-- Create a class BankAccount with a private property balance and a public method deposit to add money to the balance. Also, create a public method getBalance to return the current balance. Try to access the balance property directly from outside the class and see what happens. -->
<?php
    class BankAccount{
        private $balance;
        public $deposit = 10000;
        
        public function getBalance(){
            return $this->balance = $this->deposit;
        }
    }

    $bank = new BankAccount();
    echo $bank->getBalance();
?>