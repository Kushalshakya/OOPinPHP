<!-- Create a class User with a private property username and a constructor that sets the username property when an object is instantiated. Create a method getUsername to return the username. Instantiate the class with a username and print the username using getUsername. -->
<?php
    class User{
        private $username;
        public function __construct($username){
            $this->username = $username;
        }

        public function getUsername(){
            return $this->username;
        }
    }

    $user = new User("Kush");
    echo $user->getUsername();
?>