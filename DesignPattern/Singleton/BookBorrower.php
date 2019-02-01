<?php
// require ("SingletonPattern.php");
require ("BookSingleton.php");
/**
  * Book Borrower Class to implements 
*/
class BookBorrower {
    private $borrowedBook;
    private $haveBook = FALSE;
    /**
     * Initialization of Constructor 
     */
    function __construct($author,$title) {
      $this->author = $author;
      $this->title = $title;
    }
    /**
     * To get both Author and Title Details
     */
    function getAuthorAndTitle() {
      if (TRUE == $this->haveBook) {
        return $this->borrowedBook->getAuthorAndTitle();
      } else {
        return "I don't have the book\n";
      }
    }
    /**
     * Static Function of Eager Initialization 
     */
    function borrowBook($author,$title) {
      $this->borrowedBook = BookSingleton::borrowBook($author,$title);
      if ($this->borrowedBook == NULL) {
        $this->haveBook = FALSE;
      } else {
        $this->haveBook = TRUE;
      }
    }

    function returnBook() {
      $this->borrowedBook->returnBook($this->borrowedBook);
    }
}
?>