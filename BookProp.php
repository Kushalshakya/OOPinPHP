<!-- Create a class Book with a private property title and public methods setTitle and getTitle to set and get the title. Instantiate the Book class, set the title to "PHP for Beginners", and print the title using getTitle. -->
<?php
    class Book{
        private $title;
        public function setTitle(){
            return $this->title = "PHP for Beginners";
        }
        public function getTitle(){
            return $this->title;
        }
    }

    $book = new Book();
    $book->setTitle();
    echo $book->getTitle();
?>