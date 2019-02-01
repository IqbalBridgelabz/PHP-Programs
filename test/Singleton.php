<?php

/********************************************************************************************
 * Purpose : Use Singleton Pattern to create a Book and Author deatils borrow or return by
 *           Book Borrower.
 * File Name: SingletonPaterrn.php
 * Author   : @Hamid Iqbal Khan
 * Version  : 1.0
 * Since    : 31/01/2019
 ********************************************************************************************/
require ("/home/admin1/iqbal/Algorithm_Program/Utility.php");
class BookSingleton {
    private $author;
    private $title;
    // private $author = 'Hamid Iqbal Khan';
    // private $title  = 'Design Patterns';
    private static $book = NULL;
    private static $check = FALSE;
    /**
     * Initialization of  Private Constructor That restrict the accessing the object from another class
     */
    private function __construct($author,$title) {
      $this->author = $author;
      $this->title = $title;
    }
    /**
     * Static Function of Lazy Initialization 
     */
    static function borrowBook($author,$title) {
      if (FALSE == self::$check) {
        if (NULL == self::$book) {
           self::$book = new BookSingleton($author,$title);
        }
        self::$check = TRUE;
        return self::$book;
      } else {
        return NULL;
    }
}
    /**
     * Function to return Book Details
     */
    function returnBook(BookSingleton $bookReturned) {
        self::$check = FALSE;
    }
    /**
     * To get Author Details
     */
    function getAuthor(){
        return $this->author;
    }
    /**
     * To get Book Title Details
     */
    function getTitle(){
        return $this->title;
    }
    /**
     * To get both Author and Title Details
     */
    function getAuthorAndTitle(){
      return $this->getTitle() . ' by ' . $this->getAuthor();
    }
}
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
echo "Enter Author Name: \n";
$author = Utility::getArrayString();
echo "Enter Title Name: \n";
$title = Utility::getArrayString();

echo "BEGIN TESTING SINGLETON PATTERN:\n\n";
$bookBorrower1 = new BookBorrower($author,$title);            //Creating new object for Book Borrower1
$bookBorrower2 = new BookBorrower($author,$title);            //Creating new object for Book Borrower2
$bookBorrower1->borrowBook($author,$title);                   //calling borrowBook function for first Object
echo "BookBorrower1 asked to borrow the book:\n";
echo "Author and Title: ";
echo $bookBorrower1->getAuthorAndTitle()."\n\n";
$bookBorrower2->borrowBook($author,$title);                    //calling borrowBook function for second Object
echo "BookBorrower2 asked to borrow the book:\n";
echo "Author and Title: ";
echo $bookBorrower1->getAuthorAndTitle()."\n";
echo $bookBorrower2->getAuthorAndTitle()."\n";
$bookBorrower1->returnBook();                    //calling borrowBook function for first Object
echo "BookBorrower1 returned the book:\n";
$bookBorrower2->borrowBook($author,$title);                    //calling borrowBook function for second Object
echo "Author and Title: ";
echo $bookBorrower1->getAuthorAndTitle()."\n\n";
echo "END TESTING SINGLETON PATTERN:\n";
?>