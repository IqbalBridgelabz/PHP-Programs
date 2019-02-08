<?php
/**
 * class BookList that implements the all operation related Book class 
 */
class BookList {
    private $books = array();  //creating an empty array
    private $bookCount = 0;    //intitializing variable bookCount
    /**
     * default constructor
     */
    public function __construct() {
    }
    /**
     * method to get bookCount
     */
    public function getBookCount() {
        return $this->bookCount;
    }
    /**
     * method to setBookCount
     */
    private function setBookCount($newCount) {
        $this->bookCount = $newCount;
    }
    /**
     * method to get Book details
     */
    public function getBook($bookNumberToGet) {
        if ( (is_numeric($bookNumberToGet)) && ($bookNumberToGet <= $this->getBookCount())) {
            return $this->books[$bookNumberToGet];
        } else {
           return NULL;
        }
    }
    /**
     * method to add number of books
     */
    public function addBook(Book $book_in) {
        $this->setBookCount($this->getBookCount() + 1);
        $this->books[$this->getBookCount()] = $book_in;
        return $this->getBookCount();
    }
    /**
     * method to remove books
     */
    public function removeBook(Book $book_in) {
        $counter = 0;
        while (++$counter <= $this->getBookCount()) {
          if ($book_in->getAuthorAndTitle() == $this->books[$counter]->getAuthorAndTitle()) {
            for ($x = $counter; $x < $this->getBookCount(); $x++) {
              $this->books[$x] = $this->books[$x + 1];
          }
          $this->setBookCount($this->getBookCount() - 1);
        }
      }
      return $this->getBookCount();         // return the total no of book
    }
}
?>