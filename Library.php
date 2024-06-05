<?php
    class Library{
        private $books = [];

        public function addBook($title, $author, $year){
            $this->books[] = [
                'title' => $title,
                'author' => $author,
                'year' => $year,
            ];
        }

        public function removeBook($title) {
            foreach($this->books as $key => $book){
                if($book['title'] == $title){
                    unset($this->books[$key]);
                    $this->books = array_values($this->books);
                    return true;
                }
            }
            return false;
        }

        public function listBooks(){
            return $this->books;
        }
    }

    $book = new Library();
    $book->addBook('1984', 'George Orwell', 1949);
    $book->addBook('To Kill a Mockingbird', 'Harper Lee', 1960);
    $book->addBook('The Great Gatsby', 'F. Scott Fitzgerald', 1925);

    $book->removeBook('To Kill a Mockingbird');

    $result = $book->listBooks();
    print_r($result);
?>